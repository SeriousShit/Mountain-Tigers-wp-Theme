<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="">
    <header id="header" class="" role="banner">
        <a class="header_logo_link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <section id="branding" class="w3-row" style="background: url(<?php echo get_bloginfo('template_directory');?>/img/header.png); background-size: cover;">

            <hr class="shadow_to_top">
            </section>
        </a>



        <nav role="navigation" class="w3-navbar shadow_to_bottom">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </header>

    <div id="container" class="w3-container">
        <div class="w3-row">
