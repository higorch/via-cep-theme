<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeSetup
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css', [], '1.0.1');
        wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', [], '1.0.1');
        
        wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', ['jquery'], '1.0.1', true);
    }
}

new ThemeSetup();
