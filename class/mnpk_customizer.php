<?php
class MnpkCustomizer
{
    function __construct()
    {
        add_action('customize_register', array($this, 'mnpk_theme_message_customizer_func'));
        add_action('customize_register', array($this, 'mnpk_default_image_customizer_func'));
        add_action('customize_register', array($this, 'mnpk_cover_image_customizer_func'));
    }

    static function mnpk_theme_message_customizer_func()
    {
        global $wp_customize;
        $wp_customize->add_section('mnpk_theme_message', array(
            'title'     => '【まんぷく杯】トップページメッセージ', // 項目名
            'description' => 'トップページのカバー画像上に差し込むメッセージを設定できます。',
            'priority'  => 60, // 優先順位
        ));

        $wp_customize->add_setting('mnpk_theme_message[display]', array(
            'default'   => false,
            'type'      => 'option',
        ));
        $wp_customize->add_control('mnpk_theme_message_display', array(
            'settings'  => 'mnpk_theme_message[display]', // settingのキー
            'label'     => 'メッセージの表示切り替え（チェックをオンで表示状態）', // ラベル名
            'section'   => 'mnpk_theme_message', // sectionを指定
            'type'      => 'checkbox', // フォームの種類を指定
        ));

        $wp_customize->add_setting('mnpk_theme_message[text]', array(
            'default'   => '',
            'type'      => 'option',
            'transport' => 'postMessage',
        ));
        $wp_customize->add_control('mnpk_theme_message_text', array(
            'settings'  => 'mnpk_theme_message[text]', // settingのキー
            'label'     => 'トップに表示するメッセージ', // ラベル名
            'section'   => 'mnpk_theme_message', // sectionを指定
            'type'      => 'textarea', // フォームの種類を指定
        ));
    }
    static function mnpk_default_image_customizer_func()
    {
        global $wp_customize;
        $wp_customize->add_section('mnpk_default_image', array(
            'title'     => '【まんぷく杯】デフォルトアイキャッチ画像', // 項目名
            'description' => 'アイキャッチ画像が無かった際のデフォルト画像を指定する事ができます。',
            'priority'  => 60, // 優先順位
        ));

        $wp_customize->add_setting('mnpk_default_image_file', array(
            'default'   => '',
            'type'      => 'option',
            
        ));
        $wp_customize->add_control(
            new WP_Customize_Upload_Control(
                $wp_customize,
                'mnpk_default_image_file',
                array(
                    'settings'  => 'mnpk_default_image_file', // settingのキー
                    'label'     => '表示する画像', // ラベル名
                    'section'   => 'mnpk_default_image', // sectionを指定
                )
            )
        );
    }

    static function mnpk_cover_image_customizer_func()
    {
        global $wp_customize;
        $wp_customize->add_section('mnpk_cover_image', array(
            'title'     => '【まんぷく杯】カバー画像', // 項目名
            'description' => 'トップページのカバーとして表示する画像を指定します。',
            'priority'  => 60, // 優先順位
        ));

        $wp_customize->add_setting('mnpk_cover_image_file', array(
            'default'   => '',
            'type'      => 'option',

        ));
        $wp_customize->add_control(
            new WP_Customize_Upload_Control(
                $wp_customize,
                'mnpk_cover_image_file',
                array(
                    'settings'  => 'mnpk_cover_image_file', // settingのキー
                    'label'     => '表示する画像', // ラベル名
                    'section'   => 'mnpk_cover_image', // sectionを指定
                )
            )
        );
    }
}

new MnpkCustomizer();

function mnpk_get_top_message_text()
{
    $top_message = get_option('mnpk_theme_message');
    return $top_message['text'];
}

function mnpk_get_top_message_display()
{
    $top_message = get_option('mnpk_theme_message');
    return $top_message['display'];
}

function mnpk_get_default_image()
{
    $image = get_option('mnpk_default_image_file');
    return $image;
}

function mnpk_get_cover_image()
{
    $image = get_option('mnpk_cover_image_file');
    return $image;
}