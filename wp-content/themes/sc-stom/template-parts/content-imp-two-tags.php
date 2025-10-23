<?php
$post_id = get_the_ID();
?>
<section class="imp-two-tags">
    <div class="imp-two-tags__container main-container">
        <div class="imp-two-tags__text">
            <div class="imp-two-tags__left">
                <h2 class="imp-two-tags__title section-title">
                    <?php echo get_field('zaglovok_vtoroj_blok', $post_id)?>
                </h2>
            </div>
            <div class="imp-two-tags__desc">
                <?php echo get_field('podzagolovok_vtoroj_blok', $post_id)?>
            </div>
        </div>
        <div class="imp-two-tags__tags">
            <?php
            if( have_rows('tegy_bloka_tegy',$post_id) ):
                while( have_rows('tegy_bloka_tegy',$post_id) ) : the_row();
                    $item = get_sub_field('zagolovok_tega');
                    ?>
                    <div class="imp-two-tags__tags-item">
                        <?php echo $item;?>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="imp-two-tags__slider swiper-container">
            <?php
            if( have_rows('slajder_vtoroj_blok',$post_id) ):
                echo '<div class="imp-two-tags__wrapper swiper-wrapper">';
                while( have_rows('slajder_vtoroj_blok',$post_id) ) : the_row();
                    $image = get_sub_field('kartynka_v_slajder');
                    ?>
                    <div class="imp-two-tags__slider-item swiper-slide">
                        <img src="<?php echo $image;?>">
                    </div>
                <?php
                endwhile;
                while( have_rows('slajder_vtoroj_blok',$post_id) ) : the_row();
                    $image = get_sub_field('kartynka_v_slajder');
                    ?>
                    <div class="imp-two-tags__slider-item swiper-slide">
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