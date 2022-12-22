<?php get_header(); ?>
<?php if (mnpk_get_top_message_display()) : ?>
<div class="top-message">
    <?php echo mnpk_get_top_message_text(); ?>
</div>
<?php endif; ?>

<?php
// if (is_user_logged_in()) {
    get_template_part( 'inc/keyvisual-10' );
// } else {
//     get_template_part( 'inc/keyvisual-9' );
// }
?>
<section>
    <div class="container">
        <div class="h2container">
            <h2>
                <span>
                    <span>上級者さんから</span><span>初心者さんまで</span><br>
                    <span>誰でも</span><span>簡単に参加可能な</span><span>サーモンラン大会です</span>
                </span>
            </h2>
        </div>
        <p>みんなで楽しめる学校行事の運動会や文化祭のイメージで、運営しております。<br>スプラ２からサーモンランをプレイしていたプレイヤーから、スプラ３から始めた新規のイカちゃん、タコちゃんも気軽に参加してください。<br>詳しくはこちらの<a
                href="<?php echo get_permalink(28); ?>">大会主旨</a>や<a
                href="<?php echo get_permalink(36); ?>">ルール</a>をご覧ください。</p>
    </div>
</section>

<?php get_template_part('news-list-three'); ?>

<section class="promotion">
    <div class="container">
        <div class="h2container">
            <h2><span><span>まんぷく杯の</span><span>PVを</span><span>公開しました</span></span></h2>
        </div>
        <div class="pv">
            <lite-youtube videoid="hs_WcihfcTQ" playlabel="第9回まんぷく杯PV"></lite-youtube>
            <lite-youtube videoid="Ks1CeokgpBo" playlabel="第8回まんぷく杯PR"></lite-youtube>
            <lite-youtube videoid="pFYAUwROPiM" playlabel="第8回まんぷくサーモン杯告知動画"></lite-youtube>
        </div>
    </div>
</section>

<?php get_footer(); ?>