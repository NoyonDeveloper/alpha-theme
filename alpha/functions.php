<?php

require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path('/inc/cmb2-mb.php');

function alpha_setup_theme() {
    load_theme_textdomain( 'alpha' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array( 'image', 'video', 'audio', 'link', 'quote' ) );
    add_theme_support( 'html5', array( 'search-form' ) );
    register_nav_menu( 'main-manu', "Main Menu" );

    add_image_size( 'alphp_square', 400, 400, true );
    add_image_size( 'alphp_landcrop', 600, 450 );
    add_image_size( 'alpha_croping', 800, 500, true );
    
}

add_action( 'after_setup_theme', 'alpha_setup_theme' );

function alphp_link_setup() {
    wp_enqueue_style( 'dashicons' );
    wp_enqueue_style( 'alpha-style', get_template_directory_uri().'assets/css/alpha.css' );
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'alphp_link_setup' );

function alphp_sidebar_setup() {
    register_sidebar(
        array(
            'name' => __( 'Footer Sidebar Left', 'alpha' ),
            'id' => 'footerleft',
            'description' => __( 'Footer Sidebar Widget drag', 'alpha' )
        )
    );

    register_sidebar(
        array(
            'name' => __( 'Footer Sidebar Right', 'alpha' ),
            'id' => 'footerright',
            'description' => __( 'Footer Sidebar Widget Derag Right', 'alpha' ),
        )
    );
}
add_action( 'widgets_init', 'alphp_sidebar_setup' );

function alpha_search_ruselt_heighlith( $text ) {
    if ( is_search() ) {
        $pettrn = '/('.join( '|', explode( ' ', get_search_query() ) ).')/i';
        $text = preg_replace( $pettrn, '<span class="heighlith">\0</span>', $text );
    }
    return $text;
}
add_filter( 'the_content', 'alpha_search_ruselt_heighlith' );
add_filter( 'the_excerpt', 'alpha_search_ruselt_heighlith' );
add_filter( 'the_title', 'alpha_search_ruselt_heighlith' );

if ( !function_exists( 'alpha_theme_date' ) ) {
    function alpha_theme_date() {
        echo date( 'd/m/y' );
    }
}


function wpquery_mainquery_modyfy($wpqueryyyy){
    if(is_home() && $wpqueryyyy->is_main_query()){
        $wpqueryyyy->set("post__not_in",array(37));
    }
}
add_action("pre_get_posts","wpquery_mainquery_modyfy");



function alpha_enqueue_script_backend($hook){
    if("post.php" == $hook){
        wp_enqueue_script('admin-js', get_theme_file_uri("/js/admin.js"),array("jquery")," ",true);
    }    
}
add_action('admin_enqueue_scripts', 'alpha_enqueue_script_backend');


