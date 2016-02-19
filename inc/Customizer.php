<?php
/**
 * Mountain Tigers Theme Customizer
 *
 * @package Mountain-Tigers
 */

/*-----------------------------------------------------------------------------------*/
/*  Registering the Customizer Settings
/*-----------------------------------------------------------------------------------*/

function mountainTigers_options_theme_customizer_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    // General Settings
    $wp_customize->add_section(
        'general_settings', array(
        'title' => __( 'General Settings', 'mountainTigers' ),
        'priority' => 10,
    ) );

    // Copyright text
    $wp_customize->add_setting(
        'footer_left', array(
            'default' => 'Proudly powered by <a href="http://wordpress.org/" rel="generator">WordPress</a>',
            'sanitize_callback' => 'realistic_sanitize_text',
        )
    );

    $wp_customize->add_control(
        'footer_left',
        array(
            'label' => __( 'Copyright Text', 'mountainTigers' ),
            'section' => 'general_settings',
            'settings' => 'footer_left',
            'type' => 'textarea',
        )

    );


    // Site Title & Tagline

    //logo upload	
    $wp_customize->add_setting(
        'logo_image' , array(
        'default'     => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo_image',
            array(
                'label' => __( 'Logo Image', 'mountainTigers' ),
                'section' => 'title_tagline',
                'settings' => 'logo_image',
            )
        )
    );


    // Header image

    //header image upload
    $wp_customize->add_setting(
        'header_image' , array(
        'default'     => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'header_image',
            array(
                'label' => __( 'Header Image', 'mountainTigers' ),
                'section' => 'title_tagline',
                'settings' => 'header_image',
            )
        )
    );
}
add_action( 'customize_register', 'mountainTigers_options_theme_customizer_register' );

