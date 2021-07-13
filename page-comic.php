<?php get_header('childpage'); ?>

        <section class="comicpage container">
            <h2 class="section-title">COMIC</h2>
            <article>
                <h1 class="comicpage-title">マンガでわかるマハーバーラタ</h1>
                <div class="comicpage-body">
                    <p class="comicpage-lead">
                        日本ではあまり馴染みのないマハーバーラタ。ここではまだマハーバーラタについて詳しく知らない方向けに、マンガでわかりやすく解説していきます。
                    </p>
                    <div class="comicpage-inner">
                        <?php echo do_shortcode('[instagram-feed]'); ?>
                    </div>
                </div>
            </article>
        </section>

<?php get_footer(); ?>