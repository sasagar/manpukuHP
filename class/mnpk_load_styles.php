<?php
class MnpkLoadStyles
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'mnpk_load_styles_func'));
        add_action('enqueue_block_editor_assets', array($this, 'mnpk_load_editor_styles_func'));
        add_filter('style_loader_tag', array($this, 'mnpk_preload_styles'), 10, 4);
        add_filter('script_loader_tag', array($this, 'mnpk_defer_async_scripts'), 10, 3);
    }
    public function mnpk_load_styles_func()
    {
        if (is_home()){
            wp_deregister_style('wp-block-library');
        }
        wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
        wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array('normalize'), '6.2.0');
        wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array('normalize'), false);
        wp_enqueue_style('mnpk', get_stylesheet_directory_uri() . '/css/style.css', array('normalize', 'googlefonts'), date_i18n('YmdHis', filemtime(get_stylesheet_directory() . '/css/style.css')));

        wp_deregister_script('jquery');
        wp_deregister_script('jquery-migrate');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.1.min.js', array(), "3.6.1", true);
        wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.4.0.min.js', array('jquery'), '3.4.0', true);
        wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/hamburger.js', array('jquery'), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/hamburger.js')), true);
        wp_enqueue_script('mnpk-accordion', get_template_directory_uri() . '/js/accordion.js', array('jquery'), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/accordion.js')), true);
        wp_enqueue_script('mnpk-gototop', get_template_directory_uri() . '/js/gototop.js', array(), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/gototop.js')), true);
        wp_enqueue_script('lite-yt-embed', get_template_directory_uri() . '/js/lite-yt-embed.js', array(), date_i18n('YmdHis', filemtime(get_template_directory() . '/js/lite-yt-embed.js')), true);
    }

    // 編集画面用CSSロード
    public function mnpk_load_editor_styles_func() {
        wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0');
        wp_enqueue_style('mnpk-block-style', get_stylesheet_directory_uri() . '/block-editor-style/style.css', array('fontawesome'), date_i18n('YmdHis', filemtime(get_stylesheet_directory() . '/block-editor-style/style.css')));
    }

    public function mnpk_preload_styles($tag, $handle, $href, $media)
    {
        // 管理画面およびログイン画面ではオフ。
        // もちろん、管理画面やログイン画面で遅延読み込みにしても問題ない。
        if (is_admin() || did_action('login_head')) {
            return $tag;
        }
        //　クリティカルCSSのハンドル名を列挙。多くの場合、テーマのCSS。
        $criticals = ['mnpk'];
        // クリティカルCSSかプリントメディアの場合は何もしない。
        // media="print" の場合はスクリーンではほっといても優先度低。
        if (in_array($handle, $criticals, true) || 'print' === $media) {
            return $tag;
        }

        // カスタマイズしたタグを出力。念の為noscriptも追加。
        $html = '';
        $html .= '<link rel="preload" href="%1$s" as="style" onload="this.onload=null;this.rel=\'stylesheet\'" data-handle="%3$s" media="%4$s">' . "\n";
        $html .= '<noscript>' . "\n" .'%2$s</noscript>' . "\n";
        return sprintf($html, $href, $tag, $handle, $media);
    }

    public function mnpk_defer_async_scripts($tag, $handle, $src)
    {

        $defer_scripts = array(
            'lite-yt-embed' // 属性をつけたいバンドル名を配列に含める
        );

        $async_scripts = array(
            'hamburger',
            'mnpk-accordion',
            'mnpk-gototop', // 属性をつけたいバンドル名を配列に含める
        );

        if (in_array($handle, $defer_scripts)) {
            return '<script id="' . $handle . '" defer src="' . $src . '"></script>' . "\n"; // 間にdefer属性をつけて出力するように記載
        } else if (in_array($handle, $async_scripts)) {
            return '<script id="' . $handle . '" async src="' . $src . '"></script>' . "\n"; // 間にasync属性をつけて出力するように記載
        }
        return $tag;
    }
}

new MnpkLoadStyles();