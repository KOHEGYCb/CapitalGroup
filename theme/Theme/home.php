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
    <link rel="stylesheet" href="style.css">
    <link href="<?php get_theme_url(); ?>/css/style.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/menu.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/logo.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/slider.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/slider.js"></script>
</head>

<body>
    <?php include('skeleton/menu.php'); ?>

    <!-- page content-->
    <div class="content">
        <?php include('skeleton/logo.php'); ?>

        <div class="slider-box">
            <div class="slider">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_01.jpg" width="900" alt="">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_02.jpg" width="900" alt="">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_03.jpg" width="900" alt="">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_04.jpg" width="900" alt="">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_05.jpg" width="900" alt="">
            </div>
            <div class="prev"></div>
            <div class="next"></div>
        </div>
        <?php

    get_page_content();

    ?>
    </div>
    <!-- page content end-->

    <?php include('skeleton/footer.php'); ?>
