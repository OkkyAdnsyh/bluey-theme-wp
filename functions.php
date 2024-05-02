<?php

function enqueue_custom_script(){
    wp_enqueue_style( 'custom', get_stylesheet_uri( ) );
    wp_enqueue_script( 'script', get_template_directory_uri(  ) . '/scripts/script.js', array('jquery'));
}
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
    add_theme_support( 'menus' );
    add_theme_support( 'widgets' ); 
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_action( 'wp_enqueue_scripts', 'enqueue_custom_script');
