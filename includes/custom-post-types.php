<?php
/**
 * SUPERCELL: includes/custom-post-types.php
 *
 * Use this file to register your custom post types.
 */

add_action('init', function () {
    
    /*
     * Add Your Custom Post Type Code here using `register_post_type`
     */
    
});

/**
 * SUPERCELL: An example of registering a custom post type:
 *
 register_post_type('team_member', [
     'labels'              => [
         'name'               => __('Team Members', 'realise_hr'),
         'singular_name'      => __('Team Member', 'realise_hr'),
         'add_new'            => _x('Add New Team Member', '${4:Name}', 'realise_hr'),
         'add_new_item'       => __('Add New Team Member', 'realise_hr}'),
         'edit_item'          => __('Edit Team Member', 'realise_hr'),
         'new_item'           => __('New Team Member', 'realise_hr'),
         'view_item'          => __('View Team Member', 'realise_hr'),
         'search_items'       => __('Search Team Members', 'realise_hr'),
         'not_found'          => __('No Team Members found', 'realise_hr'),
         'not_found_in_trash' => __('No Team Members found in Trash', 'realise_hr'),
         'parent_item_colon'  => __('Parent single post type name:', 'realise_hr'),
         'menu_name'          => __('Team Members', 'realise_hr'),
     ],
     'hierarchical'        => true,
     'description'         => 'description',
     'taxonomies'          => [],
     'public'              => true,
     'show_ui'             => true,
     'show_in_menu'        => true,
     'menu_position'       => 5,
     'menu_icon'         => '',
     'show_in_nav_menus'   => true,
     'publicly_queryable'  => true,
     'exclude_from_search' => false,
     'has_archive'         => true,
     'query_var'           => true,
     'can_export'          => true,
     'rewrite'             => true,
     'capability_type'     => 'post',
     'supports'            => [
         'title', 'author', 'thumbnail',
         'custom-fields',
         'revisions', 'page-attributes', 'post-formats'
     ],
 ]);
 * 
 */


    
