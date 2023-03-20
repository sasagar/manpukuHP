<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit-cover">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <a href="<?php echo home_url('/'); ?>">
            <div class="header-container">
                <h1 class="new">
                    <img src="<?php echo get_template_directory_uri() ?>/images/rogo_inc_color.png" alt="まんぷく杯"
                        class="new_logo">
                </h1>
                <div class="header-title-container">
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
                'theme_location' => 'main-menu'
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
                    'theme_location' => 'main-menu'
                )
            );
            ?>
        </div>
    </header>
    <main>