<?php

add_action('widgets_init', 'blankslate_widgets_init');

function blankslate_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar Widget Area', 'blankslate'),
'id' => 'primary-widget-area',
'before_widget' => '<div id="%1$s" class="box-2 widget-container %2$s">',
    'after_widget' => "</div>",
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

register_sidebar(array(
'name' => __('Footer Widget Area', 'blankslate'),
'id' => 'footer-widget-area',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
    'after_widget' => "</div>",
'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

}









/*-----------------------------------------------------------------------------------*/
/*  Enqueue scripts and styles.
/*-----------------------------------------------------------------------------------*/

function mountainTigers_scripts() {
// Loading Google's font "Noto Sans"
wp_enqueue_style( 'notoSans_google_font', '//fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic', false, null, 'all' );

// Loading Custom font icons
wp_enqueue_style( 'tempe_font', get_template_directory_uri().'/css/tempe.css' );
}
add_action( 'wp_enqueue_scripts', 'mountainTigers_scripts' );


?>