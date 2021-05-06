<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php print asset('favicon.ico') ?>" />
</head>

<body class="" id="top">

<div id="mobile-menu" class="hidden bottom-0 right-0 left-0 bg-white p-8">
    <?php print wp_nav_menu(['theme_location' => 'main-menu', 'menu_class' => 'mobile-nav', 'depth' => 2]) ?>
</div>