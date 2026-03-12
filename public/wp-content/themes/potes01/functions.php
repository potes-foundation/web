<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('potes01', get_stylesheet_uri());
});
