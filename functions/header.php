<?php
// Display logo.
if (!function_exists('mountainTigers_logo')) {
    function mountainTigers_logo()
    {
        $logo_image = get_theme_mod('logo_image');
        if ($logo_image) { ?>
            <a id="logo-container" href="<?php echo home_url(); ?>" class="w3-image"
               title="<?php bloginfo('name'); ?>" rel="nofollow">
                <img src="<?php echo esc_url($logo_image); ?>" alt="<?php bloginfo('name');
                echo ' - ';
                bloginfo('description'); ?>"/>
            </a>
        <?php } else { ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
        <?php }
    }
}

// Display header image.
if (!function_exists('mountainTigers_headerImage')) {
    function mountainTigers_headerImage()
    {
        $header_image = get_theme_mod('header_image');
        if ($header_image) { ?>
            <figure class="w3-image">
                <img src="<?php echo esc_url($header_image); ?>" alt="<?php bloginfo('name');
                echo ' - ';
                bloginfo('description'); ?>"/>
            </figure>
        <?php } else { ?>
        <?php }
    }
}