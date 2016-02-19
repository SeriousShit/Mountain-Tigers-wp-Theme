<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="">
    <header id="header" class="w3-theme" role="banner">
        <section id="branding">
            <?php mountainTigers_headerImage(); ?>
            <?php mountainTigers_logo(); ?>
            <hr>
        </section>
        <nav id="menu" role="navigation" class="w3-navbar w3-theme">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </header>
    <div id="container" class="w3-container">