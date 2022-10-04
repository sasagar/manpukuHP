<section class="mnpk-news-list">
    <div class="container">
        <div class="h2container">
            <h2>
                <span>
                    <?php if (is_front_page()) :
                        echo 'お知らせ';
                    else: 
                        echo '新着記事';
                    endif;
                    ?>
                </span>
            </h2>
        </div>
        <div class="news-container">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '3',
                'no_found_rows' => true,
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
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
                                        $output .= '<li class="' . $category->slug . '">' . $category->cat_name . '</li>' . $separator;
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
            wp_reset_postdata();
            ?>
        </div>
        <a href="<?php echo home_url('/post/'); ?>" class="decorated"><span>最新記事一覧を見る！</span></a>
    </div>
</section>