<?php
/**
 * SUPERCELL: functions.php
 *
 * The standard wordpress functions.php - use this file to place calls to actions and hooks.
 */


require __DIR__.'/includes/helpers.php';
require __DIR__.'/includes/custom-post-types.php';

add_theme_support( 'post-thumbnails' );

register_nav_menus(
    array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'services-menu' => __( 'Services Menu' ),
    )
);

/**
 * SUPERCELL: Custom image sizes
 *
 * Note that when you create a new image size here, you will need to regenerate older
 * media items in order to create the new size.
 *
 * This can be done through a plugin, or using `wp media regenerate` in WP-CLI
 */
add_image_size('large_square', 600, 600, true);

/**
 * SUPERCELL: Use this function (or delete it) to change the default excerpt length.
 */
add_filter( 'excerpt_length', function ($length) {
    return 20;
});

/**
 * SUPERCELL: Enqueue scripts for theme
 *
 * This function queues up the theme's stylesheet, and JS file.
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style', get_stylesheet_uri(), [], true);
    wp_enqueue_script('themejs', get_template_directory_uri().'/theme.js', ['jquery'], true);
});

/**
 * SUPERCELL: Change except 'read more' text.
 */
add_filter('excerpt_more', function () {
    global $post;
    return ' ...';
});
