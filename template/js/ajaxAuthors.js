$(document).ready(function(){
    function ajaxPaginationAuthors() {

        var links = document.getElementsByClassName('link');

        for(var i = 0; i < links.length; i++){
            links[i].addEventListener('click', ajaxAuhtorsFunction);
        }

        function ajaxAuhtorsFunction() {
            var id = (this.id);
            $.ajax({
                url:"",
                type:"POST",
                data: {
                    id:id
                },
                success:function(data){
                    $("body").empty().html(data);
                }
            });
        }
    }
    ajaxPaginationAuthors();
});
