<?php

class MnpkThemeSupport {
    public function __construct() {
        add_action('after_setup_theme', [$this, 'mnpk_theme_support_func']);
    }
    public function mnpk_theme_support_func() {
        add_theme_support('html5');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
        add_theme_support('menus');
    }
}

new MnpkThemeSupport();