<?php

// enqueue the parent and child theme styles
//
add_action('wp_enqueue_scripts', 'gbc_enqueue_styles');
function gbc_enqueue_styles() {

    $parent_handle = 'faith-style';
    $theme = wp_get_theme();

    wp_enqueue_style($parent_handle,
        get_template_directory_uri() . '/style.css',
        array(),
        $theme->parent()->get('Version')
    );

    wp_enqueue_style('gbc-faith-style',
        get_stylesheet_uri(),
        array( $parent_handle ),
        $theme->get('Version')
    );
}

// add shortcode [gbc-child-pages] to list child pages
//
function gbc_list_child_pages() {

    global $post;

    $id = (is_page() && $post->post_parent) ? $post->post_parent : $post->ID;
    $child_pages = wp_list_pages('sort_column=menu_order&title_li=&child_of=' . $id . '&echo=0');
    if ($child_pages) {
        return '<ul class="gbc-page-list">' . $child_pages . '</ul>';
    }
}
add_shortcode('gbc-child-pages', 'gbc_list_child_pages');

// add shortcode [gbc-excerpt] to show the excerpt
add_shortcode('gbc-excerpt', 'get_the_excerpt');

// enable excerpts on pages
add_post_type_support('page', 'excerpt');
