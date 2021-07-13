<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>マハーバーラタ完全版｜世界最長の叙事詩をピーター・ブルック以来の全編舞台化</title>

    <?php wp_head(); ?>
</head>
<body class="bg-img">
    <header>
        <button type="button" class="drawer"><i class="fas fa-bars drawer-icon"></i></button>
        <div class="drawer-wrap overflow-hidden">
            <nav class="header-nav">
                <div class="drawer-header">
                    <div class="hero-title">
                        <img src="<?php echo get_template_directory_uri() ?>/img/toppage-img/hero-area-text01.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化">
                    </div>
                    <div class="drawer-text">
                        <img src="<?php echo get_template_directory_uri() ?>/img/toppage-img/hero-area-text02.png" alt="2020年7月4日〜7日なかのZERO大ホール">
                    </div>
                    <button type="button" class="drawer batsu"><i class="fas fa-times drawer-icon"></i></button>
                </div>
                <ul class="header-nav-list">
                    <li class="header-nav-top"><a href="<?php echo home_url(); ?>">トップ<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                    <li class="header-nav-news"><a href="<?php echo home_url('/news'); ?>">ニュース<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                    <li class="header-nav-story"><a href="<?php echo home_url('/story'); ?>">ストーリー<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                    <li class="header-nav-comic"><a href="<?php echo home_url('/comic'); ?>">マンガ<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                    <li class="header-nav-comments"><a href="<?php echo home_url('/comments'); ?>">著名人コメント<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                    <li class="header-nav-cast"><a href="<?php echo home_url('/cast'); ?>">キャスト<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                    <li class="header-nav-inquiry"><a href="<?php echo home_url('/inquiry'); ?>">問い合わせ<i class="fas fa-chevron-right drawer-arrow"></i></a></li>
                </ul>
            </nav>
        </div>
        <div class="hero-area">
            <div class="hero-inner">
                <h1 class="hero-title wow fadeInUp" data-wow-duration="2.0s">
                    <img src="<?php echo get_template_directory_uri() ?>/img/toppage-img/hero-area-text01.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化">
                </h1>
                <div class="hero-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">
                    <p class="hero-text-left">
                        <img src="<?php echo get_template_directory_uri() ?>/img/toppage-img/hero-area-text02.png" alt="2020年7月4日〜7日なかのZERO大ホール">
                    </p>
                    <div class="hero-text-right">
                        <p>小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<span>完全版マハーバーラタ</span>の公演が決定！！<br>アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-inner">
            <p class="reserve-btn-wrap wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.0s">
                <?php
                $reserv = SCF::get('reserv', 15);
                ?>
                <a class="reserve-btn hero-area-btn" href="<?php echo $reserv; ?>" target="_blank">チケット予約サイトへ</a>
            </p>
        </div>
    </header>
    <main>