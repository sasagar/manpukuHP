<?php
class MnpkAddMenu
{
    function __construct()
    {
        add_action('after_setup_theme', array($this, 'mnpk_add_menu_func'));
    }

    function mnpk_add_menu_func()
    {
        register_nav_menus(array( //複数のナビゲーションメニューを登録する関数
            //'「メニューの位置」の識別子' => 'メニューの説明の文字列',
            'main-menu' => 'グローバルナビ',
            'footer-menu'  => 'フッターナビ',
        ));
    }
}

new MnpkAddMenu();