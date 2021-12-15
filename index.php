<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="/animate.css-4.1.1/animate.css">
    <?php
        define("title","トップ");
        $webroot = $_SERVER['DOCUMENT_ROOT'];
        include $webroot."/head.php"
    ?>
        <meta name="description" content="1%の才能と99%の暇な時間によって生まれた最高にエモいだけの中身のないサイト。byときえのき">
        <meta property="og:image" content="https://css.enoki.xyz/img/screenshot001.jpg" />
</head>

<body class="preload">
    <?php
    $webroot = $_SERVER['DOCUMENT_ROOT'];
    include $webroot."/header.html"
    ?>
        <main>
            <div class="image_main">
                <div class="top_bg overlay" style="background-image:url(/img/neko_bg.jpg)">
                    <div class="top_bg_txt">
                        <h1 class="title wow animate__bounceInUp" data-wow-duration="1s">Welcome
                        </h1>
                        <hr class="title_hr wow animate__bounceInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <p class="description wow animate__bounceInUp hidden_word" data-wow-duration="1s" data-wow-delay=".2s" data-string="隠し文字に書く内容も無いようです">
                            ときえのきのCSS無駄遣いサイト<br> 内容の無いようなエモいページを作りたい
                        </p>
                        <div class="scroll_string">
                            <div class="scroll_string_main">
                                <p class="news">このWebサイト内にあるHTML/CSSは、自由に再利用してください。</p>
                            </div>
                        </div>
                        <div class=" space_make "></div>
                        <div class="main_button">
                            <a href="#page_2" class="main_button_1 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".3s">Read more</a>
                            <a href="#download" class="main_button_2 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".4s">Download</a>
                            <a href="#credit" class="main_button_3 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".5s">Credit・How2</a>
                        </div>
                        <div class="space_make "></div>
                    </div>
                    <section class="scroll ">
                        <a href="#page_2 "><span></span>Next</a>
                    </section>
                </div>
                <div class="top_bg overlay " style="background-image:url(/img/shibuya001.jpg) " id="page_2">
                    <div class="top_bg_txt ">
                        <h1 class="title wow animate__bounceInUp " data-wow-duration="1s ">About this</h1>
                        <hr class="title_hr wow animate__bounceInUp " data-wow-duration="1s ">
                        <p class="description wow animate__bounceInUp hidden_word" data-string="Powered by ときえのき " data-wow-duration="1s ">
                            中身が無くてもいいからエモいページが欲しい。<br>でもWordPressを使うのは飽きた。<br>そんな私が暇を持て余すために立ち上げました。
                        </p>
                        <div class="main_button ">
                            <a href="#download" class="main_button_1 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".2s">Download</a>
                            <a href="#credit" class="main_button_3 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".3s">Credit・How2</a>
                        </div>
                        <div class="space_make "></div>
                    </div>
                    <section class="scroll">
                        <a href="#download"><span></span>Next</a>
                    </section>
                </div>
                <div class="top_bg overlay " style="background-image:url(/img/joban_line.jpg) " id="download">
                    <div class="top_bg_txt ">
                        <h1 class="title wow animate__bounceInUp " data-wow-duration="1s ">Download</h1>
                        <hr class="title_hr wow animate__bounceInUp " data-wow-duration="1s ">
                        <p class="description wow animate__bounceInUp " data-wow-duration="1s ">
                            ダウンロードはこちらからできます。<br>使い方、環境などは次のページでご確認ください。<br>もしリンクが切れていたら<a href="https://enoki.xyz/twitter" class="desptiption_a">こちら</a>までご連絡ください。
                        </p>
                        <div class="main_button ">
                            <a href="#download" class="main_button_1 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".2s">Direct Download</a>
                            <a href="" class="main_button_3 wow animate__bounceInUp " data-wow-duration="1s" data-wow-delay=".3s">Show Github</a>
                        </div>
                        <div class="space_make "></div>
                    </div>
                    <section class="scroll">
                        <a href="#content_start"><span></span>Next</a>
                    </section>
                </div>
                <div class="content_normal" id="content_start">
                    <div class="space_make "></div>
                    <div class="space_make "></div>
                    <div class="space_make "></div>
                    <div class="space_make "></div>
                    <div class="space_make "></div>
                    <div class="kakoi">
                        <h1 class="content_title wow animate__bounceInLeft" data-wow-duration="1s" data-wow-delay=".1s">このWebサイトの特徴</h1>
                        <hr class="normal wow animate__bounceInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                        <h2 class="midashi wow animate__bounceInLeft" data-wow-duration="1s" data-wow-delay=".3s">はじめに</h2>
                        <p class="normal_words  wow animate__bounceInLeft" data-wow-duration="1s" data-wow-delay=".4s">CSSを無駄遣いするだけのサイトへようこそ。</p>
                        <p class="normal_words  wow animate__bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">ここでは、既にお察しの通りCSSを無駄遣いし、<strike>インターネット環境活動家に怒られながら</strike>適当に何か書いていこうと思います。</p>
                    </div>
                    <div class="space_make "></div>
                </div>
            </div>
        </main>
        <?php
            $webroot = $_SERVER['DOCUMENT_ROOT'];
            include $webroot."/footer.html"
        ?>
</body>

</html>
