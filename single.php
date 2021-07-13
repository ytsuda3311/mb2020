<?php get_header('childpage'); ?>

        <section class="news-single container">
            <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">NEWS</h2>
            <article>
                <div class="news-single-img wow fadeInUp" data-wow-duration="2.0s">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    } else {
                        echo '<img src="' . esc_url( get_template_directory_uri() ) . '/img/noimg.png" alt="">';
                    }
                    ?>
                </div>

                <div class="news-single-head wow fadeInUp" data-wow-duration="2.0s">
                    <div class="news-single-inner">
                        <time class="news-time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.n.j' ); ?></time>
                        <h1 class="news-title wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.2s"><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="news-single-body wow fadeInUp" data-wow-duration="2.0s">
                    <div class="news-single-inner">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="news-single-pagenation">
                    <?php
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();
                    ?>
                    <div class="prev-btn wow fadeInUp" data-wow-duration="2,0s">
                        <?php if($prev_post): ?>
                        <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="prev-btn-link">
                            <div class="prev-btn-inner">
                                <div class="btn-icon-wrap">
                                    <span class="prev-btn-icon"></span>
                                </div>
                                <div class="pagenation-contents">
                                    <time class="pagenation-time"><?php echo get_the_time('Y.n.j', $prev_post->ID); ?></time>
                                    <p class="pagenation-title"><?php echo get_the_title( $prev_post->ID ); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php endif; ?>
                    </div>
                    <div class="next-btn wow fadeInUp" data-wow-duration="2,0s">
                        <?php if($next_post): ?>
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="next-btn-link">
                            <div class="next-btn-inner">
                                <div class="btn-icon-wrap">
                                    <span class="next-btn-icon"></span>
                                </div>
                                <div class="pagenation-contents">
                                    <time class="pagenation-time"><?php echo get_the_time('Y.n.j', $next_post->ID); ?></time>
                                    <p class="pagenation-title"><?php echo get_the_title( $next_post->ID ); ?></p>
                                </div>
                            </div>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
        </section>

<?php get_footer(); ?>