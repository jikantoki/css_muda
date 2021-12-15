<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/animate.css-4.1.1/animate.css">
    <?php
        define("title","403");
        $webroot = $_SERVER['DOCUMENT_ROOT'];
        include $webroot."/head.php"
    ?>
        <meta name="description" content="1%の才能と99%の暇な時間によって生まれた最高にエモいだけの中身のないサイト。byときえのき">
        <meta property="og:image" content="img/screenshot001.jpg" />
</head>

<body>
    <?php
    $webroot = $_SERVER['DOCUMENT_ROOT'];
    include $webroot."/header.html"
    ?>
        <main style="margin-bottom:0px;">
            <div class="top_bg overlay" style="background-image:url(/img/omiya_station.jpg)">
                <div class="top_bg_txt">
                    <h1 class="title wow animate__bounceInUp" data-wow-duration="1s">403 Forbidden</h1>
                    <hr class="title_hr wow animate__bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <p class="description wow animate__bounceInUp hidden_word" data-wow-duration="1s" data-wow-delay=".2s" data-string="何の成果も、得られませんでした！！！">
                        ときえのきのCSS無駄遣いサイト<br> 内容の無いようなエモいページを作りたい<br>このWebサイト内にあるHTML/CSSは自由に再利用してください。
                    </p>
                    <div class="main_button ">
                        <a href="/" class="main_button_1 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".3s">トップページに戻る</a>
                    </div>
                </div>
            </div>
        </main>
        <?php
            $webroot = $_SERVER['DOCUMENT_ROOT'];
            include $webroot."/footer.html"
        ?>
</body>

</html>
