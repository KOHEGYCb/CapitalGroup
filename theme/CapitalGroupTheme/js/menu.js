    jQuery(function ($) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#nav').addClass('fixed');
                $('#lang').addClass('lang_fixed');
//                $('#logo').addClass('fixed');
            } else if ($(this).scrollTop() < 50) {
                $('#nav').removeClass('fixed');
                $('#lang').removeClass('lang_fixed');
//                $('#logo').removeClass('fixed');
            }
        });
    });
