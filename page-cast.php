<?php get_header('childpage'); ?>

        <section class="castpage">
            <div class="bg-white wow fadeInUp" data-wow-duration="2.0s">
                <div class="container">
                    <h1 class="section-title wow fadeInUp" data-wow-duration="2.0s">CAST</h1>
                    <ul class="cast-list">
                        <?php
                        $cast = SCF::get('cast');
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
                </div>
            </div>

            <div class="castarea-middle container">
                <ul class="castarea-middle-list">
                    <?php
                    $musician = SCF::get('musician');
                    foreach($musician as $fields):
                    if($fields['musician_img'] && $fields['musician_role'] && $fields['musician_name'] && $fields['musician_introductions']):
                    ?>
                    <li class="castarea-middle-item wow fadeInUp" data-wow-duration="2.0s">
                        <div class="castarea-middle-img"><?php echo wp_get_attachment_image($fields['musician_img']); ?></div>
                        <div class="castarea-middle-right">
                            <div class="castarea-middle-header">
                                <p class="castarea-middle-role"><?php echo $fields['musician_role']; ?></p>
                                <h2 class="castarea-middle-name"><?php echo $fields['musician_name']; ?></h2>
                                <p class="castarea-middle-type"><?php echo $fields['musician_position']; ?></p>
                            </div>
                            <div class="castarea-middle-body">
                                <p class="castarea-middle-text">
                                    <?php echo nl2br($fields['musician_introductions']); ?>
                                </p>
                            </div>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="castarea-bottom">
                <div class="container">
                    <ul class="castarea-bottom-list">
                        <?php
                        $staff = SCF::get('staff');
                        foreach($staff as $fields):
                        if($fields['staff_role'] && $fields['staff_name']):
                        ?>
                        <li class="castarea-bottom-item wow fadeInUp" data-wow-duration="2.0s">
                            <p class="castarea-bottom-role"><?php echo $fields['staff_role']; ?></p>
                            <h2 class="castarea-bottom-name"><?php echo $fields['staff_name']; ?></h2>
                            <p class="castarea-bottom-type"><?php echo $fields['staff_position']; ?></p>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </section>

<?php get_footer(); ?>