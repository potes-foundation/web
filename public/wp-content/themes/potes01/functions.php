<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('potes01-scroll-timeline', get_theme_file_uri('assets/vendor/scroll-timeline.js'));
    wp_enqueue_style('potes01', get_stylesheet_uri());
});

add_filter('body_class', function ($classes) {
    global $post;
    $classes[] = 'page-slug--' . sanitize_html_class($post->post_name);
    if ($post->post_parent) {
        $parent = get_post($post->post_parent);
        $classes[] = 'parent-page-slug--' . sanitize_html_class($parent->post_name);
    }
    return $classes;
});