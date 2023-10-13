<?php

function TheBlog_assets() {
    wp_enqueue_style('TheBlog-style', get_template_directory_uri() . '/css/main.css', microtime());
    wp_enqueue_script('tailwind-style','https://cdn.tailwindcss.com', true);
    wp_enqueue_script('font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', true);
    
}

add_action('wp_enqueue_scripts', 'TheBlog_assets');