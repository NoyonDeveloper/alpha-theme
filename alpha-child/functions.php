<?php

function alpha_assets_theme_coll() {
    /*
    @ parent theme style
    @
    */
    wp_enqueue_style( 'parent-style', get_parent_theme_file_uri( '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'alpha_assets_theme_coll' );

function alpha_theme_date(){
    echo date("d-m-y");
}


