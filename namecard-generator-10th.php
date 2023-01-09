<?php
/* Template Name: 第10回ネームプレート製作用　*/ 

get_header(); ?>
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
            </div>
            <div class="content">
                <?php the_content(); ?>
            </div>
            <section id="namecard-generator">

                <div class="menu">
                    <section>
                        <div>
                            <h2>陣営の選択</h2>
                        </div>
                        <div>
                            <p>下線がついている陣営が選択されているぞ！</p>
                            <div class="radio">
                                <input type="radio" id="SquidSisters" name="q1" value="01" checked>
                                <label for="SquidSisters">シオカラーズ</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="OfftheHook" name="q1" value="02">
                                <label for="OfftheHook">テンタクルズ</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="DeepCut" name="q1" value="03">
                                <label for="DeepCut">すりみ連合</label>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div>
                            <h2>二つ名の選択</h2>
                        </div>
                        <div>
                            <select id="futatsuna1">
                                <option value="野良ネズミの">野良ネズミの</option>
                                <option value="プロは">プロは</option>
                                <option value="ポンポン">ポンポン</option>
                                <option value="バイト戦隊">バイト戦隊</option>
                                <option value="届かなかった">届かなかった</option>
                                <option value="まんぷくな">まんぷくな</option>
                                <option value="まんぷく">まんぷく</option>
                                <option value="もうすぐ締め切りの">もうすぐ締め切りの</option>
                                <option value="生まれたての">生まれたての</option>
                                <option value="あふれすぎる">あふれすぎる</option>
                                <option value="あらぶる">あらぶる</option>
                                <option value="かけだしの">かけだしの</option>
                                <option value="クマサン商会">クマサン商会</option>
                                <option value="カレー好きな">カレー好きな</option>
                                <option value="うどん好きな">うどん好きな</option>
                                <option value="いちずな">いちずな</option>
                                <option value="あなただけの">あなただけの</option>
                                <option value="シャケシャケの">シャケシャケの</option>
                                <option value="ビッグラン">ビッグラン</option>
                                <option value="昔からの">昔からの</option>
                                <option value="ワールドツアー中の">ワールドツアー中の</option>
                                <option value="裏と表の">裏と表の</option>
                                <option value="オカシラシャケの">オカシラシャケの</option>
                                <option value="期待の">期待の</option>
                                <option value="ノルマの">ノルマの</option>
                                <option value="グリルと">グリルと</option>
                                <option value="お腹が">お腹が</option>
                                <option value="あまーい">あまーい</option>
                                <option value="実は">実は</option>
                                <option value="あわてんぼうの">あわてんぼうの</option>
                                <option value="スペシャル">スペシャル</option>
                                <option value="きみと">きみと</option>
                                <option value="私と">私と</option>
                                <option value="となりの">となりの</option>
                                <option value="俺の">俺の</option>
                                <option value="心の中の">心の中の</option>
                                <option value="恋の">恋の</option>
                                <option value="とりあえず">とりあえず</option>
                                <option value="おいしい">おいしい</option>
                                <option value="水没の">水没の</option>
                                <option value="大人の">大人の</option>
                                <option value="進撃の">進撃の</option>
                                <option value="夜の">夜の</option>
                                <option value="チームの">チームの</option>
                                <option value="絶妙な">絶妙な</option>
                                <option value="あなたと">あなたと</option>
                                <option value="離れたところで">離れたところで</option>
                                <option value="トキメキ☆">トキメキ☆</option>
                                <option value="納品担当">納品担当</option>
                                <option value="オオモノ担当">オオモノ担当</option>
                                <option value="コジャケ担当">コジャケ担当</option>
                                <option value="やっぱり">やっぱり</option>
                                <option value="無意識に">無意識に</option>
                                <option value="でんせつの">でんせつの</option>
                                <option value="カンスト">カンスト</option>
                                <option value="目指すは">目指すは</option>
                                <option value="イケメンの">イケメンの</option>
                            </select>
                            <select id="futatsuna2">
                                <option value="王様">王様</option>
                                <option value="じゅっこ">じゅっこ</option>
                                <option value="ペイン">ペイン</option>
                                <option value="希望の星">希望の星</option>
                                <option value="納品レンジャー">納品レンジャー</option>
                                <option value="金イクラ">金イクラ</option>
                                <option value="イカ">イカ</option>
                                <option value="バイトリーダー">バイトリーダー</option>
                                <option value="テッキュウ愛">テッキュウ愛</option>
                                <option value="ハシラ">ハシラ</option>
                                <option value="オカシラ">オカシラ</option>
                                <option value="労働組合員">労働組合員</option>
                                <option value="ボスネズミ">ボスネズミ</option>
                                <option value="野良ネズミ">野良ネズミ</option>
                                <option value="ちゅわん">ちゅわん</option>
                                <option value="プロ">プロ</option>
                                <option value="実の能力者">実の能力者</option>
                                <option value="マスター">マスター</option>
                                <option value="シオカラーズ推し">シオカラーズ推し</option>
                                <option value="テンタクルズ推し">テンタクルズ推し</option>
                                <option value="すりみ連合推し">すりみ連合推し</option>
                                <option value="敵">敵</option>
                                <option value="新人">新人</option>
                                <option value="お祭り">お祭り</option>
                                <option value="鬼">鬼</option>
                                <option value="いっしょ">いっしょ</option>
                                <option value="ヨコヅナ">ヨコヅナ</option>
                                <option value="救出">救出</option>
                                <option value="タマヒロイ">タマヒロイ</option>
                                <option value="処理班">処理班</option>
                                <option value="テッキュウ">テッキュウ</option>
                                <option value="記念日">記念日</option>
                                <option value="サメライド">サメライド</option>
                                <option value="デスタワー">デスタワー</option>
                                <option value="ハーレム">ハーレム</option>
                                <option value="クマサン">クマサン</option>
                                <option value="ノルマ">ノルマ</option>
                                <option value="ホームラン">ホームラン</option>
                                <option value="イクラ投げ">イクラ投げ</option>
                                <option value="塗る">塗る</option>
                                <option value="ザコシャケ">ザコシャケ</option>
                                <option value="やられた">やられた</option>
                                <option value="アルバイター">アルバイター</option>
                                <option value="発売中">発売中</option>
                                <option value="ヘルプ">ヘルプ</option>
                                <option value="ナイス">ナイス</option>
                                <option value="EXTRA WAVE">EXTRA WAVE</option>
                                <option value="ランデヴー">ランデヴー</option>
                                <option value="シャケラッシュ">シャケラッシュ</option>
                                <option value="LOVE">LOVE</option>
                                <option value="抱き枕">抱き枕</option>
                                <option value="運動会">運動会</option>
                                <option value="鮭畜">鮭畜</option>
                                <option value="ライバル">ライバル</option>
                                <option value="唐揚げ">唐揚げ</option>
                                <option value="たつじん">たつじん</option>
                                <option value="騎士">騎士</option>
                                <option value="パフェ">パフェ</option>
                                <option value="姫">姫</option>
                                <option value="全討伐">全討伐</option>
                                <option value="優勝">優勝</option>
                                <option value="先輩">先輩</option>
                                <option value="おいしい">おいしい</option>
                            </select>
                        </div>
                    </section>
                    <section>
                        <div>
                            <h2>チーム名の入力</h2>
                        </div>
                        <div>
                            <input type="text" id="text_team_name" maxlength="15" placeholder="チーム名" value="">
                        </div>
                    </section>
                    <section>
                        <div>
                            <h2>プレイヤー名の入力</h2>
                        </div>
                        <div>
                            <input type="text" id="text_player_name" maxlength="10" placeholder="プレイヤー名" value="">
                        </div>
                    </section>
                    <section>
                        <div>
                            <h2>参加バッジ有無の選択</h2>
                        </div>
                        <div class="switchArea">
                            <input type="checkbox" id="badgeswitch" name="badgeswitch" checked>
                            <label for="badgeswitch"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                    </section>
                    <section>
                        <h2>完成したネームプレートをダウンロードしよう！</h2>
                        <p>今回の参加バッジは「テンプラビット」だ！</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/namecard_base_10/12302.png"
                            alt="テンプラビット" class="tenpurabit">
                        <p>スマートフォンなら、画像を長押しで保存できるぞ！ PCからは右クリックして画像を保存しよう！</p>
                        <div class="namecard-container">
                            <canvas id="canvas_main" style="max-width: 100%;"></canvas>
                            <canvas id="canvas_badge" style="max-width: 100%;"></canvas>
                            <canvas id="canvas_concat" style="max-width: 100%;"></canvas>
                            <img src="" alt="namecard" id="canvas_img">
                        </div>
                        <p>よかったら、 #まんぷく杯 をつけて画像をツイートして、大会を盛り上げよう！</p>
                    </section>
                </div>
            </section>
        </article>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</section>


<?php get_template_part('news-list-three'); ?>

<?php get_footer(); ?>