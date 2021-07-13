<?php get_header('childpage'); ?>

        <section class="inquirypage container">
            <h1 class="section-title wow fadeInUp" data-wow-duration="2.0s">INQUIRY</h1>
            <div class="inquirypage-inner wow fadeInUp" data-wow-duration="2.0s">
                <p class="confirm-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">お問い合わせありがとうございました。<br>メッセージは正常に送信されました。</p>
            </div>
        </section>

        <section class="news container latest-news">
            <h2 class="section-title">LATEST NEWS</h2>
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
    
<?php get_footer(); ?>