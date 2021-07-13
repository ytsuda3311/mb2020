<?php get_header('childpage'); ?>

        <section class="commentspage container">
            <h1 class="section-title wow fadeInUp" data-wow-duration="2.0s">COMMENTS</h1>
            <p class="comments-title wow fadeInUp" data-wow-duration="2.0s">舞台関係者のみならず各界著名人からコメントが届いています！</p>
            <div class="comments-item wow fadeInUp" data-wow-duration="2.0s">
                <div class="comments-left">
                    <h2 class="comments-name wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.3s">京都佛立ミュージアム館長 <span>長松清潤</span></h2>
                    <p class="comments-text wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="1.0s">
                        蝶は風を受けて飛ぶ。いやむしろ、風を切って飛ぶ。いやさらにいえば、みずから風を孕み風を生み出す。<br>吹きすさび循環する大風のような物語。小池舞台はそんな物語を生成する未知なる蝶の飛翔だ。
                    </p>
                </div>
            </div>
            <ul class="commentspage-list">
                <?php
                $comments = SCF::get('comments');
                foreach($comments as $fields):
                if($fields['name'] && $fields['comment']):
                ?>
                <li class="commentspage-item wow fadeInUp" data-wow-duration="2.0s">
                    <h2 class="commentspage-item-title">
                        <span><?php echo $fields['name']; ?></span>
                        <small><?php echo $fields['position']; ?></small>
                    </h2>
                    <p class="commentspage-item-text">
                        <?php echo nl2br($fields['comment']); ?>
                    </p>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </section>
        
<?php get_footer(); ?>