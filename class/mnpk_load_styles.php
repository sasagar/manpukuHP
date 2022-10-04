<?php
class MnpkLoadStyles
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'mnpk_load_styles_func'));
    }
    public function mnpk_load_styles_func()
    {
        wp_deregister_style('wp-block-library');
        wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
        wp_enqueue_style('mnpkcss', get_stylesheet_directory_uri() . '/css/style.css', array('normalize'), date_i18n('YmdHis', filemtime(get_stylesheet_directory() . '/css/style.css')));
        wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array('normalize'), '6.2.0');

        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', array(), "3.6.1", true);
        wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.4.0.min.js', array('jquery'), '3.4.0', true);
        wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/hamburger.js', array('jquery'), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/hamburger.js')), true);
        wp_enqueue_script('mnpk-accordion', get_template_directory_uri() . '/js/accordion.js', array('jquery'), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/accordion.js')), true);
        wp_enqueue_script('mnpk-gototop', get_template_directory_uri() . '/js/gototop.js', array(), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/gototop.js')), true);
    }
}

new MnpkLoadStyles();