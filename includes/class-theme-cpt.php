<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeCpt
{
    public function __construct()
    {
        add_action('init', [$this, 'register_cpt']);
        add_action('after_switch_theme', [$this, 'flush_rewrite_rules']);
    }

    public function flush_rewrite_rules()
    {
        $this->register_cpt();

        flush_rewrite_rules();
    }

    public function register_cpt()
    {
        $this->cpt_address();
    }

    public function cpt_address()
    {
        $labels = array(
            'name'                  => __('Endereços', 'vct'),
            'singular_name'         => __('Endereço', 'vct'),
            'menu_name'             => __('Endereços', 'vct'),
            'name_admin_bar'        => __('Endereço', 'vct'),
            'add_new'               => __('Novo endereço', 'vct'),
            'add_new_item'          => __('Adicionar novo endereço', 'vct'),
            'new_item'              => __('Novo endereço', 'vct'),
            'edit_item'             => __('Editar endereço', 'vct'),
            'view_item'             => __('Ver endereço', 'vct'),
            'all_items'             => __('Todos endereços', 'vct'),
            'search_items'          => __('Procurar endereço', 'vct'),
            'not_found'             => __('Nenhum endereço encontrado.', 'vct'),
            'not_found_in_trash'    => __('Nenhum endereço encontrado na lixeira.', 'vct'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'address'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon' => 'dashicons-admin-site',
            'supports'           => array('title'),
        );

        register_post_type('address', $args);
    }
}

new ThemeCpt();
