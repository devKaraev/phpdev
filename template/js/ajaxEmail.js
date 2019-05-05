$(document).ready(function () {

    function book() {

        var itemBook = $('.book');

        for(var i = 0; i < itemBook.length; i++){
            itemBook[i].addEventListener('click', ajaxEmail);
        }
    }

    function ajaxEmail(){
        var idBook = (this.id).match(/[\d]+$/);

        $('#popupButton').on('click',function () {
            var id = $('[id = "author_id"]').val();
            var url = id + '/email';
            var email = $('[name = "popupEmail"]').val();
            var name = $('[name = "popupName"]').val();
            var submit = $(this) .val();

            $.ajax({
                url: url,
                type:"POST",
                data: {
                    idBook: idBook,
                    submit: submit,
                    email: email,
                    name: name
                },
                success:function (data) {
                    $('.errors').html(data);
                }
            });
        });
    };
    book();
});
