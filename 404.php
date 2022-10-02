<?php get_header(); ?>
<section class="mnpk-post">
    <div class="container">
        <article>
            <div class="post-header">
                <div class="titlebox">
                    <div class="h1container">
                        <h1><span>404 Error Not Found</span></h1>
                    </div>
                </div>
            </div>
            <div class="content">
                <p>ページが見つかりませんでした。(´･ω･`)</p>
                <p>良かったら<a href="<?php echo home_url('/'); ?>">Topページから</a>辿り直してみてください。</p>
            </div>
        </article>
    </div>
</section>


<?php get_template_part('news-list-three'); ?>

<?php get_footer(); ?>