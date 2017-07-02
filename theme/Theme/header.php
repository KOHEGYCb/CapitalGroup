<html>

<head>
    <?php get_header(); ?>
    <title>
        <?php get_page_clean_title(); ?> -
        <?php get_site_name(); ?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/menu.css" rel="stylesheet">
</head>

<body>

    <!--  menu  -->
    <div class="menu">
        <ul>
            <?php get_i18n_navigation(return_page_slug(),0,99,I18N_SHOW_PAGES); ?>
        </ul>
    </div>
    <!--  end menu -->
