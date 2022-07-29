<?php

if (!defined('ABSPATH')) {
    exit;
}

class ThemeMetabox
{
    public function __construct()
    {
        add_action('add_meta_boxes', [$this, 'register_metaboxes']);
        add_action('save_post', [$this, 'save_postdata']);
    }

    public function register_metaboxes()
    {
        add_meta_box(
            'address_details_metabox_id',
            __('Detalhes do endereço', 'vct'),
            [$this, 'address_details_metabox_html'],
            ['address']
        );
    }

    public function save_postdata($post_id)
    {
        $this->save_postdata_address_details($post_id);
    }

    public function address_details_metabox_html($post)
    {
        $bairro = get_post_meta($post->ID, '_address_bairro', true);
        $cep = get_post_meta($post->ID, '_address_cep', true);
        $complemento = get_post_meta($post->ID, '_address_complemento', true);
        $ddd = get_post_meta($post->ID, '_address_ddd', true);
        $gia = get_post_meta($post->ID, '_address_gia', true);
        $ibge = get_post_meta($post->ID, '_address_ibge', true);
        $localidade = get_post_meta($post->ID, '_address_localidade', true);
        $logradouro = get_post_meta($post->ID, '_address_logradouro', true);
        $siafi = get_post_meta($post->ID, '_address_siafi', true);
        $uf = get_post_meta($post->ID, '_address_uf', true);

        $html = '<table class="form-table" role="presentation">';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('CEP', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_cep" class="regular-text" value="' . $cep . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('Bairro', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_bairro" class="regular-text" value="' . $bairro . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('Localidade', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_localidade" class="regular-text" value="' . $localidade . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('Logradouro', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_logradouro" class="regular-text" value="' . $logradouro . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('UF', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_uf" class="regular-text" value="' . $uf . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('Complemento', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_complemento" class="regular-text" value="' . $complemento . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('DDD', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_ddd" class="regular-text" value="' . $ddd . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('GIA', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_gia" class="regular-text" value="' . $gia . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('IBGE', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_ibge" class="regular-text" value="' . $ibge . '" /></td>';
        $html .= '</tr>';

        $html .= '<tr>';
        $html .= '<th scope="row">' . __('Siafi', 'vct') . '</th>';
        $html .= '<td><input type="text" name="_address_siafi" class="regular-text" value="' . $siafi . '" /></td>';
        $html .= '</tr>';

        $html .= '</table>';

        echo $html;
    }

    public function save_postdata_address_details($post_id)
    {
        if (array_key_exists('_address_bairro', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_bairro',
                $_POST['_address_bairro']
            );
        }

        if (array_key_exists('_address_cep', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_cep',
                $_POST['_address_cep']
            );
        }

        if (array_key_exists('_address_complemento', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_complemento',
                $_POST['_address_complemento']
            );
        }

        if (array_key_exists('_address_ddd', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_ddd',
                $_POST['_address_ddd']
            );
        }

        if (array_key_exists('_address_gia', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_gia',
                $_POST['_address_gia']
            );
        }

        if (array_key_exists('_address_ibge', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_ibge',
                $_POST['_address_ibge']
            );
        }

        if (array_key_exists('_address_localidade', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_localidade',
                $_POST['_address_localidade']
            );
        }

        if (array_key_exists('_address_logradouro', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_logradouro',
                $_POST['_address_logradouro']
            );
        }

        if (array_key_exists('_address_siafi', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_siafi',
                $_POST['_address_siafi']
            );
        }

        if (array_key_exists('_address_uf', $_POST)) {
            update_post_meta(
                $post_id,
                '_address_uf',
                $_POST['_address_uf']
            );
        }
    }
}

new ThemeMetabox();
