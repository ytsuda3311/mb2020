<?php get_header('404'); ?>

        <section class="error container">
            <h1 class="error-title">404 Not Found</h1>
            <p class="error-text">ページが見つかりませんでした。<br>指定されたページは、存在しないか削除されています。</p>
            <div class="error-btn">
                <a href="<?php echo home_url(); ?>" class="error-btn-link">トップページへ戻る</a>
            </div>
        </section>

<?php get_footer('404'); ?>