<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit-cover">
    <?php wp_head(); ?>
</head>

<body <?php body_class($class); ?>>

    <header>
        <a href="<?php echo home_url('/'); ?>">
            <div class="header-container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ukiwa.png" alt="うきわアイコン">
                <div class="header-title-container">
                    <h1>
                        <span><?php bloginfo('name'); ?></span>
                    </h1>
                    <h2>
                        <span><?php bloginfo('description'); ?></span>
                    </h2>
                </div>
            </div>
        </a>
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'Global Navigation',
                    'container' => 'nav',
                    'container_class' => 'pc-nav',
                )
            );
        ?>
        <div class="hamburger">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="sp-menu">
            <div class="close-container">
                <div class="close">
                    <i class="fa-solid fa-circle-xmark"></i>
                </div>
            </div>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'Global Navigation',
                    'container' => 'nav',
                    'container_class' => 'sp-nav',
                )
            );
        ?>
        </div>
    </header>
    <main>