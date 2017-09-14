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
</head>

<body>

    <?php 
        include('logo.php'); 
        include('menu.php'); 
    ?>
