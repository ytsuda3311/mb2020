<?php get_header('story'); ?>


        <div class="story-header">
            <?php
            $hero_img = SCF::get('hero_img');
            ?>
            <div class="story-header-img">
                <?php echo wp_get_attachment_image($hero_img , 'large'); ?>
            </div>
            <div class="childpage-hero-inner container story-header-top">
                <div class="childpage-hero-title wow fadeInUp" data-wow-duration="2.0s">
                    <img src="<?php echo get_template_directory_uri() ?>/img/toppage-img/hero-area-text01.png" alt="完全版マハーバーラタ 世界最長の叙事詩をピーター・ブルック以来の全編舞台化">
                </div>
                <p class="childpage-hero-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">
                    <img src="<?php echo get_template_directory_uri() ?>/img/toppage-img/hero-area-text02.png" alt="2020年7月4日〜7日なかのZERO大ホール">
                </p>
            </div>
            <div class="container">
                <p class="reserve-btn-wrap wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.0s">
                    <?php
                    $reserv = SCF::get('reserv', 15);
                    ?>
                    <a class="reserve-btn" href="<?php echo $reserv; ?>">チケット予約サイトへ</a>
                </p>
                <p class="breadcrumbs-area">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }
                    ?>
                    </div>
                </p>
            </div>
            <div class="story-header-body">
                <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">STORY</h2>
                <div class="story-header-inner container">
                    <?php
                    $hero_title = SCF::get('hero_title');
                    $hero_introductions = SCF::get('hero_introductions');
                    ?>
                    <h3 class="story-header-subheading wow fadeInUp" data-wow-duration="2.0s"><?php echo $hero_title; ?></h3>
                    <div class="story-header-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.2s">
                        <?php echo nl2br($hero_introductions); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php
        $story = SCF::get('story');
        foreach($story as $fields):
        if($fields['bg_img'] && $fields['introductions']):
        ?>
        <div class="story-box">
            <div class="story-box-img">
                <?php echo wp_get_attachment_image($fields['bg_img'], 'large'); ?>
            </div>
            <div class="container">
                <div class="story-box-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.2s">
                <?php echo nl2br($fields['introductions']); ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

<?php get_footer(); ?>