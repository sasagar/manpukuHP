<?php get_header(); ?>
<section class="mnpk-post">
    <div class="container">
        <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                ?>
        <article>
            <div class="post-header">
                <div class="titlebox">
                    <h1><?php the_title(); ?></h1>
                    <div class="timebox">
                        <time datetime="<?php the_time('Y-m-d'); ?>" itemprop="datepublished">
                            <?php the_time('Y/m/d'); ?>
                        </time>
                    </div>
                </div>
                <figure>
                    <?php
                        if (has_post_thumbnail()) :
                            the_post_thumbnail();
                        else:
                            echo '<img src="' . get_template_directory_uri() . '/images/image_by_rupe.jpg" alt="まんぷく杯イメージ画像">';
                        endif;
                        ?>
                </figure>
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
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
                endwhile;
            endif;
            ?>
    </div>
</section>


<?php get_template_part('news-list-three'); ?>

<?php get_footer(); ?>