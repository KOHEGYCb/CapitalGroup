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
    <link href="<?php get_theme_url(); ?>/css/slider.css" rel="stylesheet" media="screen">
    <link href="<?php get_theme_url(); ?>/css/form.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php get_theme_url(); ?>/js/slider.js"></script>
</head>

<body>

    <!-- page content-->
    <div class="content">
       <?php include('skeleton/menu.php'); ?>
        <?php include('skeleton/logo.php'); ?>

        <div class="slider-box">
            <div class="slider">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_01.jpg" width="900" alt="">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_02.jpg" width="900" alt="">
                <img src="http://localhost/CapitalGroup/data/uploads/slider/slide_03.jpg" width="900" alt="">
            </div>
            <div class="prev"></div>
            <div class="next"></div>
        </div>
        <?php

    get_page_content();

    ?>
    <hr>
    <form class="contact_form" action="#" method="post" name="contact_form">
    <ul>
        <li>
             <h2>Напишите нам</h2>
        </li>
        <li>
            <label for="name">Имя:</label>
            <input type="text"  placeholder="Ваше имя" required />
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Email" required />
        </li>
        <li>
            <label for="message">Сообщение:</label>
            <textarea name="message" cols="40" rows="6" required ></textarea>
        </li>
        <li>
        	<button class="submit" type="submit">Отправить</button>
        </li>
    </ul>
</form>
    </div>
    <!-- page content end-->

    <?php include('skeleton/footer.php'); ?>
