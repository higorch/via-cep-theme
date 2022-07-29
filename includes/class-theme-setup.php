<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeSetup
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
        add_action('login_enqueue_scripts', [$this, 'custom_login_style']);
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css');
        wp_enqueue_style('cute-alert', get_template_directory_uri() . '/assets/plugins/cute-alert/style.css');
        wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css', [], '1.0.1');
        wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/theme.css', [], '1.0.1');

        wp_enqueue_script('jquery-mask', get_template_directory_uri() . '/assets/plugins/jquery-mask/jquery.mask.min.js', ['jquery'], null, true);
        wp_enqueue_script('cute-alert', get_template_directory_uri() . '/assets/plugins/cute-alert/cute-alert.js', ['jquery'], null, true);
        wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', ['jquery'], '1.0.1', true);
    }

    public function custom_login_style()
    {
        wp_enqueue_style('login-style', get_template_directory_uri() . '/assets/css/login.css', null, '8.6.2');
    }
}

new ThemeSetup();
