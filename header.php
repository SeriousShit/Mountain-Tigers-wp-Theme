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
    <header id="header" class="w3-row" role="banner">
        <section id="branding">
            <div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>
                '; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                          title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>"
                          rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>
                '; } ?>
            </div>
            <div id="site-description"><?php bloginfo( 'description' ); ?></div>
        </section>
        <nav id="menu" role="navigation" class="w3-navbar w3-black">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </header>
    <div id="container" class="w3-container">