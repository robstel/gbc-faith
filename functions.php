<?php

// enqueue scripts and style from the parent theme
//
add_action( 'wp_enqueue_scripts', 'gbc_enqueue_styles' );
function gbc_enqueue_styles() {

    $parenthandle = 'faith-style';
    $theme = wp_get_theme();

    wp_enqueue_style($parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );    

    wp_enqueue_style( 'gbc-faith-style',
        get_stylesheet_uri(),
        array( $parenthandle ), 
        $theme->get('Version')
    );
}

add_post_type_support( 'page', 'excerpt' );

