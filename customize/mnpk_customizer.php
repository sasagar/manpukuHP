<?php
function mnpk_theme_message_customizer($wp_customize) {
    $wp_customize->add_section( 'mnpk_theme_message', array(
        'title'     => 'トップページメッセージ', // 項目名
        'description' => 'トップページのカバー画像上に差し込むメッセージを設定できます。',
        'priority'  => 60, // 優先順位
    ));

    $wp_customize->add_setting( 'mnpk_theme_message[display]', array(
        'default'   => false,
        'type'      => 'option',
    ));
    $wp_customize->add_control( 'mnpk_theme_message_display', array(
        'settings'  => 'mnpk_theme_message[display]', // settingのキー
        'label'     => 'メッセージの表示切り替え（チェックをオンで表示状態）', // ラベル名
        'section'   => 'mnpk_theme_message', // sectionを指定
        'type'      => 'checkbox', // フォームの種類を指定
    ));

    $wp_customize->add_setting( 'mnpk_theme_message[text]', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'postMessage',
    ));
    $wp_customize->add_control( 'mnpk_theme_message_text', array(
        'settings'  => 'mnpk_theme_message[text]', // settingのキー
        'label'     => 'トップに表示するメッセージ', // ラベル名
        'section'   => 'mnpk_theme_message', // sectionを指定
        'type'      => 'textarea', // フォームの種類を指定
    ));
}

add_action('customize_register', 'mnpk_theme_message_customizer');

function mnpk_get_top_message_text () {
    $top_message = get_option('mnpk_theme_message');
    return $top_message['text'];
}

function mnpk_get_top_message_display () {
    $top_message = get_option('mnpk_theme_message');
    return $top_message['display'];
}