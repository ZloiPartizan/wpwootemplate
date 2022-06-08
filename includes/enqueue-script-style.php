<?php

if ( ! defined('ABSPATH')){
    exit;
}

add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );

function add_scripts_and_styles() {


    wp_enqueue_script('swiper-script' , get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), 'null', 'footer');
    wp_enqueue_script('fancy-script' , get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), 'null', 'footer');
    wp_enqueue_script('swimmers-script' , get_template_directory_uri() . '/assets/js/main.js', array(), 'null', 'footer');
    wp_enqueue_script('coach-script' , get_template_directory_uri() . '/assets/js/coach-swiper.js', array(), 'null', 'footer');
    wp_enqueue_script('coaches-script' , get_template_directory_uri() . '/assets/js/coaches-about-swiper.js', array(), 'null', 'footer');
    wp_enqueue_script('pool-script' , get_template_directory_uri() . '/assets/js/pool-swiper.js', array(), 'null', 'footer');
    wp_enqueue_script('map-script' , get_template_directory_uri() . '/assets/js/map.js', array(), 'null', 'footer');
   
    wp_deregister_script( 'ya-script' );
	wp_register_script( 'ya-script', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU');
	wp_enqueue_script( 'ya-script' );
    


    wp_enqueue_script('ajax-search' , get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), 'null', true);
    wp_localize_script('ajax-search', 'navigation-list__search-items' , array(
        'url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce('search-nonce')
    ));

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

        wp_enqueue_style('swiper-style' , get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), null, 'all');
        wp_enqueue_style('fancy-style' , get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), null, 'all');
        wp_enqueue_style('style' , get_template_directory_uri() . '/assets/css/style.css', array(), null, 'all');
        wp_enqueue_style('fonts' , get_template_directory_uri() . '/assets/font/stylesheet.css', array(), null, 'all');
}
