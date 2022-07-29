<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeRequest
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

        add_action('wp_ajax_add_address_action', [$this, 'add_address_action']);
        add_action('wp_ajax_nopriv_add_address_action', [$this, 'add_address_action']);
    }

    public function enqueue_scripts()
    {
        wp_enqueue_script('request-vct', get_template_directory_uri() . '/assets/js/request.js', ['jquery'], '1.0.2', true);
        wp_localize_script('request-vct', 'request_vct', array('ajax_url' => admin_url('admin-ajax.php')));
    }

    public function add_address_action()
    {
        $address = $_POST['address'];
        $address_details = $_POST['address_details'];

        $args = array(
            'post_title' => wp_strip_all_tags($address),
            'post_status' => 'publish',
            'post_type' => 'address',
            'meta_input'   => array(
                '_address_bairro' => $address_details['bairro'],
                '_address_cep' => $address_details['cep'],
                '_address_complemento' => $address_details['complemento'],
                '_address_ddd' => $address_details['ddd'],
                '_address_gia' => $address_details['gia'],
                '_address_ibge' => $address_details['ibge'],
                '_address_localidade' => $address_details['localidade'],
                '_address_logradouro' => $address_details['logradouro'],
                '_address_siafi' => $address_details['siafi'],
                '_address_uf' => $address_details['uf'],
            ),
        );

        if (wp_insert_post($args)) {
            echo get_template_part('templates/saved', 'addresses');
        } else {
            echo 0;
        }

        wp_die();
    }

    public function get()
    {
        # code...
    }
}

new ThemeRequest();
