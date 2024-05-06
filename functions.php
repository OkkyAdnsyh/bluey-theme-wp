<?php

function enqueue_custom_script(){
    wp_enqueue_style( 'custom', get_template_directory_uri(  ) . '/css/custom.css' );
    wp_enqueue_script( 'script', get_template_directory_uri(  ) . '/script/script.js', array('jquery'), '1.0.0', array('in_footer' => true));
}
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
}

function create_post_type() {
    register_post_type( 'F.A.Qs',
        array(
            'labels' => array(
                'name' => __( 'F.A.Qs' ),
                'singular_name' => __( 'F.A.Qs'),
                'add_new' => __( 'Add new F.A.Qs' ),
                'add_new_item' => __( 'Add a New F.A.Q' ),
                'edit' => __( 'Edit' ),
                'edit_item' => __( 'Edit F.A.Q' ),
                'new_item' => __( 'New F.A.Q' ),
                'view' => __( 'View' ),
                'view_item' => __( 'View F.A.Q' ),
                'search_items' => __( 'Search F.A.Qs' ),
                'not_found' => __( 'No Adverts F.A.Q' ),
                'not_found_in_trash' => __( 'No F.A.Q found in Trash' ),
            ),
            'supports' => array(
                'title',
                'thumbnail',
            ),
            'has_archive' => true,
            'menu_position' => 10,
            'public' => true,
            'rewrite' => array( 
                'slug' => 'faq' 
            ),
            'taxonomies' => array('faq_tag')
        )
    );
}

add_action( 'init', 'create_post_type' );
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_action( 'wp_enqueue_scripts', 'enqueue_custom_script');

if (class_exists('Woocommerce')){
    add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}