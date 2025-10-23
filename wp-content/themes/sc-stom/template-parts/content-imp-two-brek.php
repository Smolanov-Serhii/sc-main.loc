<?php
$post_id = get_the_ID();
if (get_field('pokazat_blok', $post_id) == 'true'){
    ?>
    <section class="imp-two-brek">
        <div class="imp-two-brek__container main-container">
            <div class="imp-two-brek__img">
                <div class="imp-two-brek__left">
                    <img src="<?php echo get_field('yzobrazhenye_bloka_novj_2', $post_id)?>">
                </div>
            </div>
            <div class="imp-two-brek__text">
                <h2 class="imp-one-vert__title section-title">
                    <?php echo get_field('zaglovok_bloka_novj_2', $post_id)?>
                </h2>
                <?php
                if( have_rows('lement_bloka_novj_2',$post_id) ):
                    echo '<div class="imp-two-brek__list">';
                    while( have_rows('lement_bloka_novj_2',$post_id) ) : the_row();
                        $num = get_sub_field('chyslo');
                        $text = get_sub_field('opysanye');
                        ?>
                        <div class="imp-two-brek__item">
                            <div class="imp-two-brek__item-number">
                                <?php echo $num;?>
                            </div>
                            <div class="imp-two-brek__item-text">
                                <?php echo $text;?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    echo '</div>';
                endif;
                ?>
            </div>
        </div>
    </section>
    <?php
}
?>
