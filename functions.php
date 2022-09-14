<?php
function mnpk_load_styles() {
    wp_enqueue_style('normalize','https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',array(), '8.0.1');
    wp_enqueue_style('mnpkcss', get_stylesheet_directory_uri() . '/css/style.min.css', array('normalize'), date_i18n( 'YmdHis', filemtime( get_stylesheet_directory() . '/css/style.min.css') ) );
}

add_action('wp_enqueue_scripts','mnpk_load_styles');