<?php get_header(); ?>

        <section class="intro bg-light container wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.0s">
            <div class="intro-img intro-wrap">
                <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">INTRODUCTION</h2>
                <p class="intro-title wow fadeInUp" data-wow-duration="2.0s">なぜ今「マハーバーラタ」なのか？</p>
                <div class="intro-text wow fadeInUp" data-wow-duration="2.0s">
                    <div class="intro-text-left">「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。 </div>
                    <div class="intro-text-right">現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。 </div>
                </div>
            </div>
        </section>

        <?php
        $youtube = SCF::get('youtube');
        ?>
        <?php if( $youtube ): ?>
        <div class="container">
            <div class="embed">
                <?php echo wp_oembed_get( $youtube ); ?>
            </div>
        </div>
        <?php endif; ?>

        <section class="news container">
            <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">NEWS</h2>
            <?php
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            $information= new WP_Query( array(
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish',
                'posts_per_page' => 5,
            ));
            if ( $information ->have_posts() ) :
            ?>
            <?php $cnt = 1; ?>
            <div class="news-list">
                <?php while ( $information -> have_posts() ) : $information -> the_post(); ?>
                <article class="news-item wow fadeInUp" data-wow-duration="2.0s">
                    <a href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        } else {
                            echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                        }
                        ?>
                        <div class="news-text">
                            <time class="news-text-time"><?php the_time( 'Y.n.j' ); ?></time>
                            <h1 class="news-text-title">
                            <?php
                            if(mb_strlen($post->post_title) > 20 && $cnt > 3) {
                                $title= mb_substr($post->post_title, 0, 20) ;
                                echo $title . '...';
                            } elseif(mb_strlen($post->post_title) > 30) {
                                $title= mb_substr($post->post_title, 0, 30) ;
                                echo $title . '...';
                            } else {
                                echo $post->post_title;
                            }
                            ?>
                            </h1>
                        </div>
                    </a>
                </article>
                <?php $cnt++; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php
            // サブクエリをリセット
            wp_reset_postdata();
            ?>
            <div class="news-btn-wrap wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">
                <a href="<?php echo home_url('/news'); ?>" class="news-btn">ニュース一覧へ</a>
            </div>
        </section>

        <?php
        $story_img = SCF::get('hero_img', 162);
        $story_introductions = SCF::get('hero_introductions', 162);
        ?>
        <section class="story wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.3s">
            <div class="story-img">
                <?php echo wp_get_attachment_image($story_img, 'large'); ?>
            </div>
            <div class="container">
                <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">STORY</h2>
                <div class="story-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.5s">
                    <p>
                        <?php echo nl2br($story_introductions); ?>
                    </p>
                </div>
                <div class="story-btn-wrap wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">
                    <a href="<?php echo home_url('/story'); ?>" class="story-btn">もっと詳しく</a>
                </div>
            </div>
        </section>

        <section class="comments container">
            <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">COMMENTS</h2>
            <p class="comments-title wow fadeInUp" data-wow-duration="2.0s">舞台関係者のみならず各界著名人からコメントが届いています！</p>
            <div class="comments-item wow fadeInUp" data-wow-duration="2.0s">
                <div class="comments-left">
                    <h3 class="comments-name wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.3s">京都佛立ミュージアム館長 <span>長松清潤</span></h3>
                    <p class="comments-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.0s">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                </div>
                <a href="<?php echo home_url('/comments'); ?>" class="comments-btn wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">もっと見る</a>
            </div>
        </section>

        <section class="cast bg-white wow fadeInUp" data-wow-duration="2.0s">
            <div class="container">
                <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">CAST</h2>
                <ul class="cast-list">
                        <?php
                        $cast = SCF::get('cast', 188);
                        foreach($cast as $fields):
                        if($fields['cast_img'] && $fields['cast_role'] && $fields['cast_name'] && $fields['cast_introductions']):
                        ?>
                        <li class="cast-item wow fadeInUp" data-wow-duration="2.0s">
                            <div class="cast-header">
                                <div class="cast-img"><?php echo wp_get_attachment_image($fields['cast_img']); ?></div>
                                <p class="cast-role"><?php echo $fields['cast_role']; ?></p>
                                <h2 class="cast-name"><?php echo $fields['cast_name']; ?></h2>
                                <p class="cast-type"><?php echo $fields['cast_position']; ?></p>
                            </div>
                            <div class="cast-body">
                                <p class="cast-text">
                                    <?php echo nl2br($fields['cast_introductions']); ?>
                                </p>
                            </div>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <div class="cast-btn-wrap wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">
                    <a href="<?php echo home_url('/cast'); ?>" class="cast-btn">もっと見る</a>
                </div>
            </div>
        </section>

<?php get_footer(); ?>