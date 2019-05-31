<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/arbati6/frino@1.0.1/frinostyle.min.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body class="main-document">
    <div class="open-menu-overlay"></div>
    <header class="header">
        <a class="main-logo" href="<?php echo get_home_url(); ?>">
            <img class="main-logo__img" src="<?php echo get_theme_file_uri('img/logo_black.png') ?>" alt="logo header">
        </a>
        <button class="hamburger-menu"><i class="menu-icon F-MENU"></i></button>
        <nav class="main-menu-mobile">
            <?php 
                wp_nav_menu ( array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>   
        </nav>
        <?php get_search_form(); ?>
        <a href="https://rafalfuczynski.com/frino" class="frino-banner">
            <img class="frino-banner__img" src="<?php echo get_theme_file_uri('img/frino_banner.png') ?>" alt="font frino banner">
        </a>
        <nav class="main-menu">
            <?php 
                wp_nav_menu ( array(
                    'theme_location' => 'headerMenuLocation'
                ));
            ?>   
        </nav>
    </header>