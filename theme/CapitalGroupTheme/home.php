<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
?>
<html>

<head>
    <?php get_header(); ?>
    <title>
        <?php get_page_clean_title(); ?> -
        <?php get_site_name(); ?>
    </title>
    <meta charset="utf-8">
    <!--    <meta http-equiv="Refresh" content="1" />-->
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/content.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/menu.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/logo.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/preloader.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/footer.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/form.css">
    <link rel="stylesheet" href="<?php get_theme_url(); ?>/css/header.css">


    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/preloader.js"></script>
    




    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/slick-theme.css" />


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/slick.js"></script>
    
    
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/menu.js"></script>

    <script>
        $(document).ready(function() {
            $('.slider').slick({
                autoplay: true
            });
        });

    </script>
</head>

<body>

    <?php

include('skeleton/content.php'); 

include('skeleton/footer.php'); 
?>
