
const text_size_futatsuna = 40;
const text_size_tw_futatsuna = 80;
const text_size_futatsuna_correct_y = 0;

const text_size_team = 64
const text_size_tw_team = 150;
const text_size_team_correct_y = 0;

window.addEventListener('load', function () {
    load_page();
});


// イベントリスナー登録フェス開催
window.addEventListener('DOMContentLoaded', () => {
    // ラジオボタン
    document.getElementById('Umi').addEventListener("change", () => {
        drawing();
        tw_drawing();
    });
    document.getElementById('Hanabi').addEventListener("change", () => {
        drawing();
        tw_drawing();
    });
    document.getElementById('BBQ').addEventListener("change", () => {
        drawing();
        tw_drawing();
    });

    // セレクトボックス
    document.getElementById('futatsuna1').addEventListener("change", () => {
        drawing();
        tw_drawing();
    });
    document.getElementById('futatsuna2').addEventListener("change", () => {
        drawing();
        tw_drawing();
    });

    // テキストエリア
    document.getElementById('text_team_name').addEventListener("keyup", () => {
        drawing();
        tw_drawing();
    });
    document.getElementById('text_player_name').addEventListener("keyup", () => {
        drawing();
        tw_drawing();
    });

    // チェックボックス
    document.getElementById('badgeswitch').addEventListener("change", () => {
        drawing();
        tw_drawing();
    });
});

//キャンバスに画像を描画する
function load_page() {

    const fontFace_01 = new FontFace(
        'Splatfont',
        'url(/wp-content/themes/manpuku/font/Splatfont.ttf)',
        { style: 'normal' }
    );

    const fontFace_01_common = new FontFace(
        'SplatfontCommon',
        'url(/wp-content/themes/manpuku/font/Splatoon1-common.3b7ce8b3c19f74921f51.woff2)',
        { style: 'normal' }
    );

    const fontFace_01_hira = new FontFace(
        'SplatfontHira',
        'url(/wp-content/themes/manpuku/font/Splatoon1JP-hiragana-katakana.7650dccc9af86f19f094.woff2)',
        { style: 'normal' }
    );

    const fontFace_01_jplv1 = new FontFace(
        'SplatfontJPLv1',
        'url(/wp-content/themes/manpuku/font/Splatoon1JP-level1.fafc97f04a568e26ba52.woff2)',
        { style: 'normal' }
    );

    const fontFace_01_jplv2 = new FontFace(
        'SplatfontJPLv2',
        'url(/wp-content/themes/manpuku/font/Splatoon1JP-level2.225bb1db5962c9d61773.woff2)',
        { style: 'normal' }
    );

    const fontFace_01_cjk = new FontFace(
        'SplatfontCjk',
        'url(/wp-content/themes/manpuku/font/Splatoon1-cjk-common.62441e2d3263b7141ca0.woff2)',
        { style: 'normal' }
    );

    const fontFace_02 = new FontFace(
        'Splatfont2',
        'url(/wp-content/themes/manpuku/font/Splatfont2.ttf)',
        { style: 'normal' }
    );

    const fontFace_02_common = new FontFace(
        'Splatfont2Common',
        'url(/wp-content/themes/manpuku/font/Splatoon2-common.4e7b2cad208fa2fc42ca.woff2)',
        { style: 'normal' }
    );

    const fontFace_02_hira = new FontFace(
        'Splatfont2Hira',
        'url(/wp-content/themes/manpuku/font/Splatoon2JP-hiragana-katakana.f423b5ce60b7456df1b3.woff2)',
        { style: 'normal' }
    );

    const fontFace_02_jplv1 = new FontFace(
        'Splatfont2JPLv1',
        'url(/wp-content/themes/manpuku/font/Splatoon2JP-level1.1f43f499aa71ee002067.woff2)',
        { style: 'normal' }
    );

    const fontFace_02_jplv2 = new FontFace(
        'Splatfont2JPLv2',
        'url(/wp-content/themes/manpuku/font/Splatoon2JP-level2.9742567c70e359573d6d.woff2)',
        { style: 'normal' }
    );

    const fontFace_02_cjk = new FontFace(
        'Splatfont2Cjk',
        'url(/wp-content/themes/manpuku/font/Splatoon2-cjk-common.7dc791c403ed7f33d73e.woff2)',
        { style: 'normal' }
    );

    fontFace_01.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP1読み込み失敗...');
    });

    fontFace_01_common.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP1Common読み込み失敗...');
    });

    fontFace_01_hira.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP1hira読み込み失敗...');
    });

    fontFace_01_jplv1.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP1JPLv1読み込み失敗...');
    });

    fontFace_01_jplv2.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP1JPLv2読み込み失敗...');
    });

    fontFace_01_cjk.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP1CJK読み込み失敗...');
    });

    fontFace_02.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        document.getElementById('namecard-generator-12').style.fontFamily = 'Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        drawing();
        tw_drawing();
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SPL2読み込み失敗...');
    });

    fontFace_02_common.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP2Common読み込み失敗...');
    });

    fontFace_02_hira.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP2hira読み込み失敗...');
    });

    fontFace_02_jplv1.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP2JPLv1読み込み失敗...');
    });

    fontFace_02_jplv2.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP2JPLv2読み込み失敗...');
    });

    fontFace_02_cjk.load().then(function (loadedFace) {
        /// フォント読み込み成功
        /// body要素全体にそれを適用する
        document.fonts.add(loadedFace);
        // document.body.style.fontFamily = '"Splatfont"';
    }).catch(function (e) {
        /// フォント読み込み失敗
        console.error('SP2CJK読み込み失敗...');
    });


    return
}


async function drawing() {

    //画像ロードが完了してからキャンバスの準備をする
    const canvas = document.getElementById("canvas_main");
    const ctx = canvas.getContext('2d');


    let elements = document.getElementsByName('q1');

    let len = elements.length;
    let checkValue = '';

    const image = new Image();
    const badge = new Image();
    let img_src = "";
    let futa_color = "#ffffff";
    let name_color = "#ffffff";
    let team_color = "#ffffff";
    let event_color = "#ffffff";
    let name_shadow = false;
    let name_shadow_color = "#ffffff";
    let team_shadow = false;
    let team_shadow_color = "#ffffff";
    let futatsuna_shadow = false;
    let futatsuna_shadow_color = "#ffffff";
    let event_shadow = false;
    let event_shadow_color = "#ffffff";

    for (let i = 0; i < len; i++) {
        if (elements.item(i).checked) {
            checkValue = elements.item(i).value;

            switch (checkValue) {
                case "01":
                    img_src = '/wp-content/themes/manpuku/images/namecard_base_12/umi.png';
                    futa_color = "#000000";
                    name_color = "#000000";
                    team_color = "#000000";
                    event_color = "#000000";
                    name_shadow = true;
                    name_shadow_color = "#ffffff";
                    team_shadow = false;
                    team_shadow_color = "#ffffff";
                    futatsuna_shadow = true;
                    futatsuna_shadow_color = "#ffffff";
                    event_shadow = true;
                    event_shadow_color = "#ffffff";
                    // alert("シオカラーズ")
                    break;
                case "02":
                    img_src = '/wp-content/themes/manpuku/images/namecard_base_12/hanabi_g@2x.png';
                    futa_color = "#ffffff";
                    name_color = "#ffffff";
                    team_color = "#ffffff";
                    event_color = "#ffffff";
                    name_shadow = false;
                    name_shadow_color = "#000000";
                    team_shadow = true;
                    team_shadow_color = "#000000";
                    futatsuna_shadow = true;
                    futatsuna_shadow_color = "#000000";
                    event_shadow = true;
                    event_shadow_color = "#000000";
                    // alert("テンタクルズ")
                    break;
                case "03":
                    img_src = '/wp-content/themes/manpuku/images/namecard_base_12/bbq.png';
                    futa_color = "#000000";
                    name_color = "#000000";
                    team_color = "#000000";
                    event_color = "#000000";
                    name_shadow = true;
                    name_shadow_color = "#ffffff";
                    team_shadow = true;
                    team_shadow_color = "#ffffff";
                    futatsuna_shadow = true;
                    futatsuna_shadow_color = "#ffffff";
                    event_shadow = true;
                    event_shadow_color = "#ffffff";
                    // alert("すりみ連合")
                    break;
            }
        }
    }

    image.src = img_src;

    image.onload = (async function () {
        //キャンバスのサイズを画像サイズに合わせる
        canvas.width = image.width;
        canvas.height = image.height;

        //キャンバスに画像を描画（開始位置0,0
        ctx.drawImage(image, 0, 0);

        var text = document.getElementById("futatsuna1").value + document.getElementById("futatsuna2").value;
        // alert(text.value)
        //文字のスタイルを指定
        // ctx.font = '32px serif';
        ctx.font = 'Italic ' + String(text_size_futatsuna) + 'px Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        ctx.fillStyle = futa_color;
        if (futatsuna_shadow) {
            ctx.shadowColor = futatsuna_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'left';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = (10);
        var y = 50 + text_size_futatsuna_correct_y;
        ctx.fillText(text, x, y);


        var text = document.getElementById("text_player_name").value;
        //文字のスタイルを指定
        ctx.font = String(text_size_team) + 'px  Splatfont, SplatfontCommon, SplatfontHira, SplatfontJPLv1, SplatfontJPLv2, SplatfontCjk';
        ctx.fillStyle = name_color;
        if (name_shadow) {
            ctx.shadowColor = name_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'center';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = (canvas.width / 2);
        var y = (canvas.height / 2) + (text_size_team / 2) + text_size_team_correct_y;
        ctx.fillText(text, x, y);

        var text = document.getElementById("text_team_name").value;
        //文字のスタイルを指定
        ctx.font = String(text_size_futatsuna) + 'px Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        ctx.fillStyle = team_color;
        if (team_shadow) {
            ctx.shadowColor = team_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'right';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = 680;
        var y = 55;
        ctx.fillText(text, x, y);

        var text = '第12回 まんぷく杯';
        //文字のスタイルを指定
        ctx.font = '30px Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        ctx.fillStyle = event_color;
        if (event_shadow) {
            ctx.shadowColor = event_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'left';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = 10;
        var y = 180 - text_size_futatsuna_correct_y;
        ctx.fillText(text, x, y);

        await concatSteps();

    });

    badge.src = '/wp-content/themes/manpuku/images/namecard_base_12/kurumaritiger.png';
    const tempuracanvas = document.getElementById("canvas_badge");
    const ctxb = tempuracanvas.getContext("2d");
    badge.onload = async function () {
        tempuracanvas.height = 200;
        tempuracanvas.width = 700;
        ctxb.drawImage(badge, 640, 140, 50, 50);

        await concatSteps();
    }

}

async function concatSteps() {
    document.getElementById("canvas_concat").height = 200;
    document.getElementById("canvas_concat").width = 700;

    const flag = document.getElementsByName("badgeswitch")[0].checked;
    // console.log(flag);

    let canvas_main;

    if (flag) {
        await concatCanvas("#canvas_concat", ["#canvas_main", "#canvas_badge"], 700, 200);
        canvas_main = document.getElementById('canvas_concat');
    } else {
        await concatCanvas("#canvas_concat", ["#canvas_main"], 700, 200);
        canvas_main = document.getElementById('canvas_concat');
    }
    const canvas_data = canvas_main.toDataURL("image/png");
    const canvas_img = document.getElementById("canvas_img");

    canvas_img.src = canvas_data;
}

// Twitter header分
async function tw_drawing() {

    //画像ロードが完了してからキャンバスの準備をする
    const canvas = document.getElementById("canvas_tw_main");
    const ctx = canvas.getContext('2d');


    let elements = document.getElementsByName('q1');

    let len = elements.length;
    let checkValue = '';

    const image = new Image();
    const badge = new Image();
    let img_src = ""
    let futa_color = "#ffffff";
    let name_color = "#ffffff";
    let team_color = "#ffffff";
    let event_color = "#ffffff";
    let name_shadow = false;
    let name_shadow_color = "#ffffff";
    let team_shadow = false;
    let team_shadow_color = "#ffffff";
    let futatsuna_shadow = false;
    let futatsuna_shadow_color = "#ffffff";
    let event_shadow = false;
    let event_shadow_color = "#ffffff";
    for (let i = 0; i < len; i++) {
        if (elements.item(i).checked) {
            checkValue = elements.item(i).value;

            switch (checkValue) {
                case "01":
                    img_src = '/wp-content/themes/manpuku/images/namecard_base_12/umi_tw.png';
                    futa_color = "#000000";
                    name_color = "#000000";
                    team_color = "#000000";
                    event_color = "#000000";
                    name_shadow = true;
                    name_shadow_color = "#ffffff";
                    team_shadow = false;
                    team_shadow_color = "#ffffff";
                    futatsuna_shadow = true;
                    futatsuna_shadow_color = "#ffffff";
                    event_shadow = true;
                    event_shadow_color = "#ffffff";
                    // alert("シオカラーズ")
                    break;
                case "02":
                    img_src = '/wp-content/themes/manpuku/images/namecard_base_12/hanabi_tw_g@2x.png';
                    futa_color = "#ffffff";
                    name_color = "#ffffff";
                    team_color = "#ffffff";
                    event_color = "#ffffff";
                    name_shadow = false;
                    name_shadow_color = "#000000";
                    team_shadow = true;
                    team_shadow_color = "#000000";
                    futatsuna_shadow = true;
                    futatsuna_shadow_color = "#000000";
                    event_shadow = true;
                    event_shadow_color = "#000000";
                    // alert("テンタクルズ")
                    break;
                case "03":
                    img_src = '/wp-content/themes/manpuku/images/namecard_base_12/bbq_tw.png';
                    futa_color = "#000000";
                    name_color = "#000000";
                    team_color = "#000000";
                    event_color = "#000000";
                    name_shadow = true;
                    name_shadow_color = "#ffffff";
                    team_shadow = true;
                    team_shadow_color = "#ffffff";
                    futatsuna_shadow = true;
                    futatsuna_shadow_color = "#ffffff";
                    event_shadow = true;
                    event_shadow_color = "#ffffff";
                    // alert("すりみ連合")
                    break;
            }
        }
    }

    image.src = img_src;

    image.onload = (async function () {
        //キャンバスのサイズを画像サイズに合わせる
        canvas.width = image.width;
        canvas.height = image.height;

        //キャンバスに画像を描画（開始位置0,0
        ctx.drawImage(image, 0, 0);

        var text = document.getElementById("futatsuna1").value + document.getElementById("futatsuna2").value;
        // alert(text.value)
        //文字のスタイルを指定
        // ctx.font = '32px serif';
        ctx.font = 'Italic ' + String(text_size_tw_futatsuna) + 'px Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        ctx.fillStyle = futa_color;
        if (futatsuna_shadow) {
            ctx.shadowColor = futatsuna_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'left';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = 30;
        var y = 100;
        ctx.fillText(text, x, y);


        var text = document.getElementById("text_player_name").value;
        //文字のスタイルを指定
        ctx.font = String(text_size_tw_team) + 'px  Splatfont, SplatfontCommon, SplatfontHira, SplatfontJPLv1, SplatfontJPLv2, SplatfontCjk';
        ctx.fillStyle = name_color;
        if (name_shadow) {
            ctx.shadowColor = name_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'center';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = (canvas.width / 2);
        var y = (canvas.height / 2) + (text_size_tw_team / 2);
        ctx.fillText(text, x, y);

        var text = document.getElementById("text_team_name").value;
        //文字のスタイルを指定
        ctx.font = String(text_size_tw_futatsuna) + 'px Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        ctx.fillStyle = team_color;
        if (team_shadow) {
            ctx.shadowColor = team_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'right';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = 1470;
        var y = 100;
        ctx.fillText(text, x, y);

        var text = '第12回 まんぷく杯';
        //文字のスタイルを指定
        ctx.font = '70px Splatfont2, Splatfont2Common, Splatfont2Hira, Splatfont2JPLv1, Splatfont2JPLv2, Splatfont2Cjk';
        ctx.fillStyle = event_color;
        if (event_shadow) {
            ctx.shadowColor = event_shadow_color;
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 10;
        } else {
            ctx.shadowOffsetX = 0;
            ctx.shadowOffsetY = 0;
            ctx.shadowBlur = 0;
        }
        //文字の配置を指定（左上基準にしたければtop/leftだが、文字の中心座標を指定するのでcenter
        ctx.textBaseline = 'alphabetic';
        ctx.textAlign = 'left';
        //座標を指定して文字を描く（座標は画像の中心に）
        var x = 30;
        var y = 460;
        ctx.fillText(text, x, y);

        await tw_concatSteps();

    });

    badge.src = '/wp-content/themes/manpuku/images/namecard_base_12/kurumaritiger.png';
    const tempuracanvas = document.getElementById("canvas_tw_badge");
    const ctxb = tempuracanvas.getContext("2d");
    badge.onload = async function () {
        tempuracanvas.height = 500;
        tempuracanvas.width = 1500;
        ctxb.drawImage(badge, (1470 - 125), (460 - 125), 125, 125);

        await tw_concatSteps();
    }
}

async function tw_concatSteps() {
    document.getElementById("canvas_tw_concat").height = 500;
    document.getElementById("canvas_tw_concat").width = 1500;

    const flag = document.getElementsByName("badgeswitch")[0].checked;
    // console.log(flag);

    let canvas_main;

    if (flag) {
        await concatCanvas("#canvas_tw_concat", ["#canvas_tw_main", "#canvas_tw_badge"], 1500, 500);
        canvas_main = document.getElementById('canvas_tw_concat');
    } else {
        await concatCanvas("#canvas_tw_concat", ["#canvas_tw_main"], 1500, 500);
        canvas_main = document.getElementById('canvas_tw_concat');
    }
    const canvas_data = canvas_main.toDataURL("image/png");
    const canvas_img = document.getElementById("canvas_tw_img");

    canvas_img.src = canvas_data;
}


/**
 * Canvas合成
 *
 * @param {string} base 合成結果を描画するcanvas(id)
 * @param {array} asset 合成する素材canvas(id)
 * @param {int} width 合成する幅
 * @param {int} height 合成する高さ
 * @return {void}
 */
async function concatCanvas(base, asset, width, height) {
    const canvas = document.querySelector(base);
    const ctx = canvas.getContext("2d");

    for (let i = 0; i < asset.length; i++) {
        const image1 = await getImagefromCanvas(asset[i]);
        ctx.drawImage(image1, 0, 0, width, height);
    }
}

/**
 * Canvasを画像として取得
 *
 * @param {string} id  対象canvasのid
 * @return {object}
 */
function getImagefromCanvas(id) {
    return new Promise((resolve, reject) => {
        const image = new Image();
        const ctx = document.querySelector(id).getContext("2d");
        image.onload = () => resolve(image);
        image.onerror = (e) => reject(e);
        image.src = ctx.canvas.toDataURL();
    });
}
