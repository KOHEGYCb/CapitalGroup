<script type="text/javascript" src="<?php get_theme_url(); ?>/js/preloader.js"></script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery-1.4.2.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.accordion.2.0.js" charset="utf-8"></script>
<script type="text/javascript">
    $('#accordion').accordion({
        canToggle: true,
        canOpenMultiple: true
    });

</script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/slick.js"></script>
<script>
    $(document).ready(function() {
        $('.slider').slick({
            autoplay: true
        });
    });

</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#dop_menu").on("click", "a", function(event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({
                scrollTop: top
            }, 1500);
        });
    });

</script>
<script type="text/javascript" src="<?php get_theme_url(); ?>/js/menu.js"></script>
</body>
<?php get_footer(); ?>
</head>
