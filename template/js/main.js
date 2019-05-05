$(document).ready(function() {

    $('.book').on('click',function(){
        $('.errors').fadeIn();
        $('#js-overlay-campaign').fadeIn();
    });

    $('#js-close-campaign').on('click',function(){
        $('.errors').fadeOut(function () {
            $(this).empty();
        });
        $('#js-overlay-campaign').fadeOut();
        $('main').css('filter','none');
    });

    $(document).on('mousedown',function(e){
        var popup = $('#js-overlay-campaign');
        if(e.target !== popup && popup.has(e.target).length === 0){
            $('.errors').fadeOut(function(){
                $(this).empty();
            });
            $('#js-overlay-campaign').fadeOut();
            $('main').css('filter','none');
        }
    });

    $('.form_dropdown select').on('change',function(){
        var select = $('.form_dropdown select').val();
        var author = $('.form_dropdown #author_id').val();
        $.ajax({
            url:"",
            type:"POST",
            data:{
                select:select,
                author:author
            },
            success:function(data){
                if (select == 2){$("body").html(data);}
                else { $(".block_1").html(data);}
            }
        });
    });

    function pagBooks() {
        var links = document.getElementsByClassName('link');

        for(var i = 0; i < links.length; i++){
            links[i].addEventListener('click', ajaxBooksFunction);
            }
    }

        function ajaxBooksFunction() {
            var select = $('.form_dropdown select').val();
            var page = (this.id);

            $.ajax({
                url:"",
                type:"POST",
                data: {
                    select:select,
                    page:page
                },
                success:function(data){
                    if (select == 2 ){$("body").empty().html(data)}
                    else {$(".scripts").remove(); $(".block_1").html(data)}
                }
            });
        }
    pagBooks();
});
