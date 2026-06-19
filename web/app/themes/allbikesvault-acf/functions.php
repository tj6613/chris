<?php

function allbikesvault_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'allbikesvault'),
    ));
}
add_action('after_setup_theme', 'allbikesvault_theme_setup');

function allbikesvault_enqueue_scripts() {
    wp_enqueue_style('bootstrap-4-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', array(), '4.6.2');
    wp_enqueue_style('allbikesvault-style', get_stylesheet_uri(), array('bootstrap-4-css'), '1.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-4-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '4.6.2', true);
}
add_action('wp_enqueue_scripts', 'allbikesvault_enqueue_scripts');

function allbikesvault_register_acf_homepage_fields() {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    $fields = array();

    for ($i = 1; $i <= 3; $i++) {
        $fields[] = array(
            'key' => 'field_abv_slide_' . $i . '_image',
            'label' => 'Slide ' . $i . ' Image',
            'name' => 'slide_' . $i . '_image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'library' => 'all',
        );

        $fields[] = array(
            'key' => 'field_abv_slide_' . $i . '_title',
            'label' => 'Slide ' . $i . ' Title',
            'name' => 'slide_' . $i . '_title',
            'type' => 'text',
        );

        $fields[] = array(
            'key' => 'field_abv_slide_' . $i . '_text',
            'label' => 'Slide ' . $i . ' Text',
            'name' => 'slide_' . $i . '_text',
            'type' => 'textarea',
            'rows' => 3,
        );

        $fields[] = array(
            'key' => 'field_abv_slide_' . $i . '_button_text',
            'label' => 'Slide ' . $i . ' Button Text',
            'name' => 'slide_' . $i . '_button_text',
            'type' => 'text',
        );

        $fields[] = array(
            'key' => 'field_abv_slide_' . $i . '_button_link',
            'label' => 'Slide ' . $i . ' Button Link',
            'name' => 'slide_' . $i . '_button_link',
            'type' => 'url',
        );
    }

    for ($i = 1; $i <= 4; $i++) {
        $fields[] = array(
            'key' => 'field_abv_service_' . $i . '_image',
            'label' => 'Service ' . $i . ' Image',
            'name' => 'service_' . $i . '_image',
            'type' => 'image',
            'return_format' => 'url',
            'preview_size' => 'medium',
            'library' => 'all',
        );

        $fields[] = array(
            'key' => 'field_abv_service_' . $i . '_title',
            'label' => 'Service ' . $i . ' Title',
            'name' => 'service_' . $i . '_title',
            'type' => 'text',
        );

        $fields[] = array(
            'key' => 'field_abv_service_' . $i . '_text',
            'label' => 'Service ' . $i . ' Text',
            'name' => 'service_' . $i . '_text',
            'type' => 'textarea',
            'rows' => 3,
        );

        $fields[] = array(
            'key' => 'field_abv_service_' . $i . '_link',
            'label' => 'Service ' . $i . ' Link',
            'name' => 'service_' . $i . '_link',
            'type' => 'url',
        );
    }

    $extra_fields = array(
        array('key' => 'field_abv_about_title', 'label' => 'About Title', 'name' => 'about_title', 'type' => 'text'),
        array('key' => 'field_abv_about_text', 'label' => 'About Text', 'name' => 'about_text', 'type' => 'wysiwyg', 'tabs' => 'all', 'toolbar' => 'basic', 'media_upload' => 0),
        array('key' => 'field_abv_about_image', 'label' => 'About Image', 'name' => 'about_image', 'type' => 'image', 'return_format' => 'url', 'preview_size' => 'medium'),
        array('key' => 'field_abv_about_button_text', 'label' => 'About Button Text', 'name' => 'about_button_text', 'type' => 'text'),
        array('key' => 'field_abv_about_button_link', 'label' => 'About Button Link', 'name' => 'about_button_link', 'type' => 'url'),
        array('key' => 'field_abv_cta_title', 'label' => 'CTA Title', 'name' => 'cta_title', 'type' => 'text'),
        array('key' => 'field_abv_cta_text', 'label' => 'CTA Text', 'name' => 'cta_text', 'type' => 'textarea', 'rows' => 3),
        array('key' => 'field_abv_cta_button_text', 'label' => 'CTA Button Text', 'name' => 'cta_button_text', 'type' => 'text'),
        array('key' => 'field_abv_cta_button_link', 'label' => 'CTA Button Link', 'name' => 'cta_button_link', 'type' => 'url'),
    );

    $fields = array_merge($fields, $extra_fields);

    acf_add_local_field_group(array(
        'key' => 'group_allbikesvault_homepage',
        'title' => 'Homepage Fields',
        'fields' => $fields,
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
        'position' => 'normal',
        'style' => 'default',
    ));
}
add_action('acf/init', 'allbikesvault_register_acf_homepage_fields');
