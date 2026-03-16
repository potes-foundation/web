<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('potes01-scroll-timeline', get_theme_file_uri('assets/vendor/scroll-timeline.js'));
    wp_enqueue_style('potes01', get_stylesheet_uri());

});
