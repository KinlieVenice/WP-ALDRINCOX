<?php

function aldrincox_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());
    wp_enqueue_script("banner-js", get_template_directory_uri() . '/js/banner__sldr.js', [], microtime(), true);
    wp_enqueue_script("contact-js", get_template_directory_uri() . '/js/contact.js', [], microtime(), true);
    wp_enqueue_script("faqs-js", get_template_directory_uri() . '/js/faqs.js', [], microtime(), true);
    wp_enqueue_script("gallery-js", get_template_directory_uri() . '/js/gallery__sldr.js', [], microtime(), true);
    wp_enqueue_script("services-js", get_template_directory_uri() . '/js/services.js', [], microtime(), true);
    wp_enqueue_script("testimonials-js", get_template_directory_uri() . '/js/testimonials.js', [], microtime(), true);
    wp_enqueue_script("toggle-js", get_template_directory_uri() . '/js/toggle__menu.js', [], microtime(), true);
    wp_enqueue_script("video-js", get_template_directory_uri() . '/js/video.js', [], microtime(), true);
}

add_action('wp_enqueue_scripts', 'aldrincox_assets');

function aldrincox_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('title-tag');

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu', 'Footer Menu');
}

add_action('after_setup_theme', 'aldrincox_theme_support');


function aldrincox_custom_post() {
    $services_label = array(
        'name' => __('Services', 'textdomain'),
        'singular_name' => __('Services', 'textdomain'),
        'add_new' => __('Add Services', 'textdomain'),
        'edit_item' => __('Edit Services', 'textdomain'),
        'add_new_item' => __('Add New Services', 'textdomain'),
        'all_items' => __('Services', 'textdomain'),
    );

    $services_args = array(
        'labels' => $services_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('category'),
    );

    register_post_type('services', $services_args);


    $headline_label = array(
    'name' => __('Headline', 'textdomain'),
    'singular_name' => __('Headline', 'textdomain'),
    'add_new' => __('Add Headline', 'textdomain'),
    'edit_item' => __('Edit Headline', 'textdomain'),
    'add_new_item' => __('Add New Headline', 'textdomain'),
    'all_items' => __('Headline', 'textdomain'),
    );

    $headline_args = array(
        'labels' => $headline_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('headline', $headline_args);


    $testimonials_label = array(
    'name' => __('Testimonials', 'textdomain'),
    'singular_name' => __('Testimonials', 'textdomain'),
    'add_new' => __('Add Testimonials', 'textdomain'),
    'edit_item' => __('Edit Testimonials', 'textdomain'),
    'add_new_item' => __('Add New Testimonials', 'textdomain'),
    'all_items' => __('Testimonials', 'textdomain'),
    );

    $testimonials_args = array(
        'labels' => $testimonials_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('testimonials', $testimonials_args);


    $gallery_label = array(
    'name' => __('Gallery', 'textdomain'),
    'singular_name' => __('Gallery', 'textdomain'),
    'add_new' => __('Add Gallery', 'textdomain'),
    'edit_item' => __('Edit Gallery', 'textdomain'),
    'add_new_item' => __('Add New Gallery', 'textdomain'),
    'all_items' => __('Gallery', 'textdomain'),
    );

    $gallery_args = array(
        'labels' => $gallery_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    );

    register_post_type('gallerys', $gallery_args);



    $flag_label = array(
    'name' => __('Flags', 'textdomain'),
    'singular_name' => __('Flag', 'textdomain'),
    'add_new' => __('Add Flag', 'textdomain'),
    'edit_item' => __('Edit Flag', 'textdomain'),
    'add_new_item' => __('Add New Flag', 'textdomain'),
    'all_items' => __('Flags', 'textdomain'),
    );

    $flag_args = array(
        'labels' => $flag_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    );

    register_post_type('flags', $flag_args);


    $about_label = array(
    'name' => __('About', 'textdomain'),
    'singular_name' => __('About', 'textdomain'),
    'add_new' => __('Add About', 'textdomain'),
    'edit_item' => __('Edit About', 'textdomain'),
    'add_new_item' => __('Add New About', 'textdomain'),
    'all_items' => __('About', 'textdomain'),
    );

    $about_args = array(
        'labels' => $about_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    );

    register_post_type('about', $about_args);


    $faqs_label = array(
    'name' => __('Faqs', 'textdomain'),
    'singular_name' => __('Faq', 'textdomain'),
    'add_new' => __('Add Faq', 'textdomain'),
    'edit_item' => __('Edit Faq', 'textdomain'),
    'add_new_item' => __('Add New Faq', 'textdomain'),
    'all_items' => __('Faqs', 'textdomain'),
    );

    $faqs_args = array(
        'labels' => $faqs_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'supports' => array('title', 'editor', 'custom-fields', 'thumbnail')
    );

    register_post_type('faqs', $faqs_args);
}

add_action( 'init', 'aldrincox_custom_post');