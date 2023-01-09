<?php
class MnpkLoadNameCardGenerator
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'mnpk_load_draw_js_func'));
    }
    public function mnpk_load_draw_js_func()
    {
        if ( is_page( 'namecard-generator-10th' ) ) {
            wp_enqueue_script('mnpk-namecard-draw-10', get_template_directory_uri() . '/js/namecard-draw-10.js', array(), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/namecard-draw-10.js')), true);
        }
    }

}

new MnpkLoadNameCardGenerator();