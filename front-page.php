<?php get_header(); ?>
<?php if (mnpk_get_top_message_display()): ?>
<div class="top-message">
    <?php echo mnpk_get_top_message_text(); ?>
</div>
<?php endif; ?>
<div class="visual">
    <div class="lead">
        <p><span>新たな敵を</span><span>仲間と共に</span><span>迎え撃て!</span></p>
        <p><span>全イカタコが</span><span>泣いた、</span><span>あの喜びと</span><span>あの感動が</span><span>再び・・・</span></p>
    </div>
</div>
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
            <iframe src="https://www.youtube.com/embed/Ks1CeokgpBo" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/pFYAUwROPiM" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>