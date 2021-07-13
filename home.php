<?php get_header('childpage'); ?>

        <section class="news-archive container">
            <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">NEWS</h2>
            <?php
            $paged = get_query_var('paged')? get_query_var('paged') : 1;
            $information= new WP_Query( array(
                'post_type' => 'post',
                'paged' => $paged,
                'post_status' => 'publish',
                'posts_per_page' => 9,
            ));
            if ( $information ->have_posts() ) :
            ?>
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
                            if(mb_strlen($post->post_title) > 30) {
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
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php
            // サブクエリをリセット
            wp_reset_postdata();
            ?>
            <div class="news-archive-pagenation wow fadeInUp" data-wow-duration="2.0s">
                <!-- <a href="#" class="page-numbers">1</a>
                <a href="#" class="page-numbers">2</a>
                <a href="#" class="next page-numbers"><span>></span></a> -->
                <?php
                    if( function_exists('wp_pagenavi') ) {
                        wp_pagenavi(array('query' => $information));
                    }
                ?>
            </div>
        </section>
    
<?php get_footer(); ?>