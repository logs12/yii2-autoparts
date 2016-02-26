/**
 * Created by work on 14.02.2016.
 */

jQuery(document).ready(function(){

    var btn = $('.callback');

    var entity = btn.attr('entity');


    btn.click(function(event){

        event.preventDefault();

        var modalContainer = $('#callbackpop');

        $.ajax({
            url: 'callback/callback/get-form',
            type: 'POST',
            success: function (data) {
                if (data){
                    $('.modal-body').html(data);
                    $('#callbackform-entity').val(entity);
                    modalContainer.modal({show:true});
                    afterSuccess();
                }
            }
        });
    });

    function afterSuccess(){
        $('.callback-form').on('submit',function(event){
            event.preventDefault();

            var form = $(this);

            $.ajax({
                url: 'callback/callback/callback',
                type: 'POST',
                data: form.serialize(),
                success: function(data){
                    var modalBody = $('.modal-body');
                    if (data == 'true') {
                        modalBody.html("<div class='alert alert-success'>" +
                                            "<strong>Спасибо! Ваше сообщение отправлено.</strong>" +
                                            "</div>");
                        setTimeout(function() {
                            $("#callbackpop").modal('hide');
                        }, 2000);
                    }
                    else {
                        $('.modal-body').html(data);
                    }
                }
            });
        });
    }

});