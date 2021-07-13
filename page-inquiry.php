<?php get_header('childpage'); ?>

        <section class="inquirypage container">
            <h1 class="section-title wow fadeInUp" data-wow-duration="2.0s">INQUIRY</h1>
            <div class="inquirypage-inner wow fadeInUp" data-wow-duration="2.0s">
                <p class="inquirypage-text wow fadeInUp" data-wow-duration="2.0s">
                    小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。
                </p>
                <?php echo do_shortcode('[contact-form-7 id="5" title="コンタクトフォーム 1"]') ?>
            </div>
        </section>

<?php get_footer(); ?>