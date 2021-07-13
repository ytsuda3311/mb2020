        <section class="schedule container">
            <div class="schedule-inner bg-light wow fadeInUp" data-wow-duration="2.0s">
                <h2 class="section-title wow fadeInUp" data-wow-duration="2.0s">SCHEDULE</h2>
                <ul class="schedule-list">
                    <?php
                    $schedule = SCF::get('schedule', 15);
                    foreach($schedule as $field_name => $field_value):
                    if($field_value['schedule_event']):
                    ?>
                    <li class="schedule-item wow fadeInUp" data-wow-duration="2.0s">
                        <p class="schedule-text">
                            <?php echo $field_value['schedule_event']; ?>
                        </p>
                        <?php if($field_value['schedule_link'] and $field_value['schedule_linktext']): ?>
                        <a href="<?php echo $field_value['schedule_link']; ?>" class="schedule-link" target="_blank"><?php echo $field_value['schedule_linktext']; ?></a>
                        <?php endif; ?>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="schedule-btn-wrap">
                <a href="<?php echo home_url('/inquiry'); ?>" class="schedule-btn-left wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s">お問い合わせはこちら</a>
                <?php
                $reserv = SCF::get('reserv', 15);
                ?>
                <a href="<?php echo $reserv; ?>" class="schedule-btn-right wow fadeInUp" data-wow-duration="2.0s" data-wow-delay="0.5s" target="_blank">チケット予約サイトへ</a>
            </div>
        </section>

        <a href="#" id="totop"><i class="fas fa-arrow-up totop-icon"></i></a>
    </main>

    <footer class="footer">
        <div class="container">
            <small>Copyright <i class="far fa-copyright copyright"></i> 2019 完全版マハーバーラタ All Rights Reserved.</small>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>