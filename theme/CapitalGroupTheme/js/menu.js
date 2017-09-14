    jQuery(function ($) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#nav').addClass('fixed');
//                $('#logo').addClass('fixed');
            } else if ($(this).scrollTop() < 50) {
                $('#nav').removeClass('fixed');
//                $('#logo').removeClass('fixed');
            }
        });
    });
