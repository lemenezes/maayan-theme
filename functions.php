<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'maayan-custom',
        get_stylesheet_directory_uri() . '/assets/css/custom.css',
        [],
        '1.0.0'
    );
});
