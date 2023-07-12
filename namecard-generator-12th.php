<?php
/* Template Name: 第12回ネームプレート製作用　*/ 

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
            <section id="namecard-generator-12">

                <div class="menu">
                    <section>
                        <div>
                            <h2>陣営の選択</h2>
                        </div>
                        <div>
                            <p>下線がついている陣営が選択されているぞ！</p>
                            <div class="radio">
                                <input type="radio" id="Umi" name="q1" value="01" checked>
                                <label for="Umi">海</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="Hanabi" name="q1" value="02">
                                <label for="Hanabi">花火</label>
                            </div>
                            <div class="radio">
                                <input type="radio" id="BBQ" name="q1" value="03">
                                <label for="BBQ">BBQ</label>
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
                                <option value="ポンポン">ポンポン</option>
                                <option value="バイト戦隊">バイト戦隊</option>
                                <option value="届かなかった">届かなかった</option>
                                <option value="まんぷくな">まんぷくな</option>
                                <option value="もうすぐ締め切りの">もうすぐ締め切りの</option>
                                <option value="生まれたての">生まれたての</option>
                                <option value="あらぶる">あらぶる</option>
                                <option value="かけだしの">かけだしの</option>
                                <option value="クマサン商会">クマサン商会</option>
                                <option value="うどん好きな">うどん好きな</option>
                                <option value="いちずな">いちずな</option>
                                <option value="あなただけの">あなただけの</option>
                                <option value="シャケシャケの">シャケシャケの</option>
                                <option value="ビッグラン">ビッグラン</option>
                                <option value="昔からの">昔からの</option>
                                <option value="ワールドツアー中の">ワールドツアー中の</option>
                                <option value="オカシラシャケの">オカシラシャケの</option>
                                <option value="期待の">期待の</option>
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
                                <option value="絶妙な">絶妙な</option>
                                <option value="あなたと">あなたと</option>
                                <option value="トキメキ☆">トキメキ☆</option>
                                <option value="納品担当の">納品担当の</option>
                                <option value="オオモノ担当の">オオモノ担当の</option>
                                <option value="コジャケ担当の">コジャケ担当の</option>
                                <option value="やっぱり">やっぱり</option>
                                <option value="無意識に">無意識に</option>
                                <option value="でんせつの">でんせつの</option>
                                <option value="カンスト">カンスト</option>
                                <option value="目指すは">目指すは</option>
                                <option value="イケメンの">イケメンの</option>
                                <option value="アゲアゲな">アゲアゲな</option>
                                <option value="ホットな">ホットな</option>
                                <option value="クールな">クールな</option>
                                <option value="残業好きな">残業好きな</option>
                                <option value="キラッと">キラッと</option>
                                <option value="カラッと">カラッと</option>
                                <option value="勝利の">勝利の</option>
                                <option value="てっきゅー">てっきゅー</option>
                                <option value="コロコロな">コロコロな</option>
                                <option value="揚げたての">揚げたての</option>
                                <option value="衣の付いた">衣の付いた</option>
                                <option value="サクサクの">サクサクの</option>
                                <option value="やせた">やせた</option>
                                <option value="ふとった">ふとった</option>
                                <option value="ダイエット中の">ダイエット中の</option>
                                <option value="タツの">タツの</option>
                            </select>
                            <select id="futatsuna2">
                                <option value="希望の星">希望の星</option>
                                <option value="納品レンジャー">納品レンジャー</option>
                                <option value="金イクラ">金イクラ</option>
                                <option value="イカ">イカ</option>
                                <option value="バイトリーダー">バイトリーダー</option>
                                <option value="テッキュウ愛">テッキュウ愛</option>
                                <option value="労働組合員">労働組合員</option>
                                <option value="プロ">プロ</option>
                                <option value="マスター">マスター</option>
                                <option value="新人">新人</option>
                                <option value="お祭り">お祭り</option>
                                <option value="いっしょ">いっしょ</option>
                                <option value="タマヒロイ">タマヒロイ</option>
                                <option value="処理班">処理班</option>
                                <option value="テッキュウ">テッキュウ</option>
                                <option value="記念日">記念日</option>
                                <option value="サメライド">サメライド</option>
                                <option value="デスタワー">デスタワー</option>
                                <option value="ハーレム">ハーレム</option>
                                <option value="クマサン">クマサン</option>
                                <option value="イクラ投げ">イクラ投げ</option>
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
                                <option value="パフェ">パフェ</option>
                                <option value="姫">姫</option>
                                <option value="全討伐">全討伐</option>
                                <option value="優勝">優勝</option>
                                <option value="先輩">先輩</option>
                                <option value="おいしい">おいしい</option>
                                <option value="プロデューサー">プロデューサー</option>
                                <option value="タツ">タツ</option>
                                <option value="ウロコハンター">ウロコハンター</option>
                                <option value="プロバイター">プロバイター</option>
                                <option value="女神">女神</option>
                                <option value="あげ">あげ</option>
                                <option value="まんぷくちゃん">まんぷくちゃん</option>
                                <option value="納品屋さん">納品屋さん</option>
                                <option value="バランサー">バランサー</option>
                                <option value="エイ！">エイ！</option>
                                <option value="行きますえ">行きますえ</option>
                                <option value="運ぶのじゃ">運ぶのじゃ</option>
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
                        <p>今回の参加バッジは「くるまりタイガー」だ！</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/namecard_base_12/kurumaritiger.png"
                            alt="くるまりタイガー" class="tenpurabit">
                        <p>スマートフォンなら、画像を長押しで保存できるぞ！ PCからは右クリックして画像を保存しよう！</p>
                        <div class="namecard-container">
                            <canvas id="canvas_main" style="max-width: 100%;"></canvas>
                            <canvas id="canvas_badge" style="max-width: 100%;"></canvas>
                            <canvas id="canvas_concat" style="max-width: 100%;"></canvas>
                            <img src="" alt="namecard" id="canvas_img">
                        </div>

                        <h3>Twitterヘッダー用サイズ</h3>
                        <div class="namecard-tw-container">
                            <canvas id="canvas_tw_main" style="max-width: 100%;"></canvas>
                            <canvas id="canvas_tw_badge" style="max-width: 100%;"></canvas>
                            <canvas id="canvas_tw_concat" style="max-width: 100%;"></canvas>
                            <img src="" alt="namecard" id="canvas_tw_img">
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