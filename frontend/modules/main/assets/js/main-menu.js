/**
 * Created by vasil on 20.03.2016.
 */

jQuery(document).ready(function($){
    /* Определяем координаты верха блока навигации */
    $h = $('.navbar-main').offset().top;
    $(window).scroll(function(){
        // Если прокрутили скролл ниже макушки блока, включаем фиксацию
        if ( $(window).scrollTop() > $h) {
            $(".navbar-main").css({"position":"fixed", "top":0});
        }else{
            //Иначе возвращаем всё назад. Тут вы вносите свои данные
            $(".navbar-main").css({
                "position":"inherit"
            });
        }
    });

    /* плавный скролл якорей ссылок*/
    $("#bs-navbar-main").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href').slice(1),
            top = $(id).offset().top;
        $('html, body').animate({
            scrollTop: top,
            duration: 500,
            easing: "swing"
        });
    });

});
