<?php
$post_id = get_the_ID();
?>
<section class="imp-two">
    <div class="imp-two__container main-container">
        <div class="imp-two__text">
            <div class="imp-two__left">
                <h2 class="imp-two__title section-title">
                    <?php echo get_field('zaglovok_vtoroj_blok', $post_id)?>
                </h2>
                <div class="imp-two__subtitle section-subtitle">
                    <?php echo get_field('podzagolovok_vtoroj_blok', $post_id)?>
                </div>
            </div>
            <div class="imp-two__right">
                <?php echo get_field('opysanye_vtoroj_blok', $post_id)?>
            </div>
        </div>
        <div class="imp-two__slider swiper-container">
            <?php
            if( have_rows('slajder_vtoroj_blok',$post_id) ):
                echo '<div class="imp-two__wrapper swiper-wrapper">';
                while( have_rows('slajder_vtoroj_blok',$post_id) ) : the_row();
                    $image = get_sub_field('kartynka_v_slajder');
                    ?>
                    <div class="imp-two__slider-item swiper-slide">
                        <img src="<?php echo $image;?>">
                    </div>
                <?php
                endwhile;
                while( have_rows('slajder_vtoroj_blok',$post_id) ) : the_row();
                    $image = get_sub_field('kartynka_v_slajder');
                    ?>
                    <div class="imp-two__slider-item swiper-slide">
                        <img src="<?php echo $image;?>">
                    </div>
                <?php
                endwhile;
                echo '</div>';
            endif;
            ?>
        </div>
    </div>
</section>