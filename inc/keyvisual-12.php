<div class="visual kv12">
    <div id="center-container">
        <img id="kv12_title" src="<?php echo get_template_directory_uri() . '/images/kv12/manpukucup_12.png' ?>"
            alt="第12回 まんぷく杯">
        <h2 id="kv12_date"><img src="<?php echo get_template_directory_uri() . '/images/kv12/manpukucup_12_date.png' ?>"
                alt="2023.07.29(土) 21:00 START!"></h2>
        <div id="buttons">
            <?php if (get_post_status ( 511 ) == 'publish') :?>
            <a href="<?php echo get_permalink(511); ?>">結果発表はこちら！</a>
            <?php else: ?>
            <a href="<?php echo get_permalink(402); ?>">参加方法</a>
            <a href="<?php echo get_permalink(390); ?>">ルール</a>
            <?php endif; ?>
        </div>
    </div>
    <div id="left-container">
        <img id="shan" src="<?php echo get_template_directory_uri() . '/images/kv12/shan.png' ?>" aria-hidden="true">
        <img id="yoyomi" src="<?php echo get_template_directory_uri() . '/images/kv12/yoyomi.png' ?>"
            aria-hidden="true">
        <img id="hinanu" src="<?php echo get_template_directory_uri() . '/images/kv12/hinanu.png' ?>"
            aria-hidden="true">
        <img id="tsubasa" src="<?php echo get_template_directory_uri() . '/images/kv12/2basa.png' ?>"
            aria-hidden="true">
    </div>
    <div id="right-container">
        <img id="sasapiyo" src="<?php echo get_template_directory_uri() . '/images/kv12/sasapiyo.png' ?>"
            aria-hidden="true">
        <img id="midodo" src="<?php echo get_template_directory_uri() . '/images/kv12/midodo.png' ?>"
            aria-hidden="true">
        <img id="gazooo0" src="<?php echo get_template_directory_uri() . '/images/kv12/gazooo0.png' ?>"
            aria-hidden="true">
        <img id="tenohirasize" src="<?php echo get_template_directory_uri() . '/images/kv12/tenohirasize.png' ?>"
            aria-hidden="true">
    </div>
</div>