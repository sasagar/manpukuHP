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
                </div>
                <?php
                        if (has_post_thumbnail()) :
                            echo '<figure>';
                            the_post_thumbnail();
                            echo '</figure>';
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