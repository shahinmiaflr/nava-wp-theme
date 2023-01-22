<?php

    require_once 'shortcode.php';
    
    register_nav_menus( array(
    'main_menu' => 'Main Menu',
    'footer_menu' => 'Footer Menu'

) );

function myown_post_type(){
    register_post_type('myprojects' , array(
        'public' => true,
        'label' => 'custom projects',
        'labels' => array(
            'add_new_item' => 'New Custom Project',
            'not_found' => 'No Custom Project here',
            'view_item' => 'view project'
        ),
        'query_var' => 'myprojects',
        'rewrite' => array(
            'slug' => 'myprojects'
        ),
        'supports' => array(
            'title', 'thumbnail', 'editor'
        )
    ));
}


  add_action('init', 'myown_post_type');

    function theme_prefix_rewrite_flush() {
        flush_rewrite_rules();
    }
    add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );



   function theme_files(){
    //add style
    wp_enqueue_style('nava-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700', array(), NULL, 'all' );
    wp_enqueue_style('nava-fontwosame', get_template_directory_uri() .'/css/font-awesome.min.css', array(), NULL, 'all' );
    wp_enqueue_style('nava-style', get_stylesheet_uri(), array(), '1.0', 'all' );
    wp_enqueue_style('nava-slicknav', get_template_directory_uri().'/css/slicknav.min.css', array(), NULL, 'all');
    wp_enqueue_style('nava-responsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0');
    
    //add scpript
    wp_enqueue_script('nava-jquery', get_template_directory_uri().'/js/jquery.min.js', array(),'2.2.4', true);
    wp_enqueue_script('nava-slicknav', get_template_directory_uri().'/js/jquery.slicknav.min.js', array(), NULL, true);
    wp_enqueue_script('nava-main', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts' , 'theme_files');


