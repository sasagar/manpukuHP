<?php get_header(); ?>

<section class="mnpk-news-list">
    <div class="container">
        <div class="h2container">
            <h2>
                <span>
                    記事一覧
                </span>
            </h2>
        </div>
        <div class="news-container">
            <?php

            if (have_posts()) :
                while (have_posts()) : the_post();
                ?>
            <a href="<?php echo get_permalink(); ?>">
                <article>
                    <div class="titlebox">
                        <h3><?php the_title(); ?></h3>
                    </div>
                    <figure>
                        <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail('large');
                        else:
                            echo '<img src="' . mnpk_get_default_image()  . '" alt="まんぷく杯イメージ画像">';
                        endif;
                        ?>
                    </figure>
                    <div class="timebox">
                        <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished">
                            <?php the_time('Y/m/d'); ?>
                        </time>
                    </div>
                    <div class="tagbox">
                        <?php
                            $categories = get_the_category();
                            if (0 != count($categories)) :
                        ?>
                        <ul>
                            <?php
                                $separator = ' ';
                                $output = '';
                                if ( $categories ) :
                                    foreach( $categories as $category ) {
                                        $output .= '<li class="' . $category->slug . '"><span>' . $category->cat_name . '</span></li>' . $separator;
                                    }
                                    echo trim( $output, $separator );
                                endif;
                            ?>
                        </ul>
                        <?php
                        endif;
                        ?>
                    </div>
                </article>
            </a>
            <?php
                endwhile;
            endif;
            ?>
        </div>
        <?php
        if (function_exists('wp_pagenavi')) :
            wp_pagenavi();
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>