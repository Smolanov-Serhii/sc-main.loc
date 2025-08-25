<?php
$post_id = get_the_ID();
?>
<section class="imp-one">
    <div class="imp-one__container main-container">
        <h1 class="imp-one__title section-title">
            <?php echo get_field('zagolovok_bloka_banner', $post_id)?>
        </h1>
        <div class="imp-one__subtitle section-subtitle">
            <?php echo get_field('podzagolovok_bloka_banner', $post_id)?>
        </div>
        <div class="imp-one__btns">
            <div class="imp-one__btn button button-blue">
                <span><?php echo get_field('tekst_tmnoj_knopky', $post_id)?></span>
            </div>
            <div class="imp-one__btn button button-white">
                <span><?php echo get_field('tekst_svetloj_knopky', $post_id)?></span>
            </div>
        </div>
        <div class="imp-one__slider swiper-container">
            <?php
            if( have_rows('slajder_bannera',$post_id) ):
                echo '<div class="imp-one__wrapper swiper-wrapper">';
                while( have_rows('slajder_bannera',$post_id) ) : the_row();
                    $image = get_sub_field('yzobrazhenye_slajdera');
                    ?>
                    <div class="imp-one__slider-item swiper-slide">
                        <img src="<?php echo $image;?>">
                    </div>
                <?php
                endwhile;
                while( have_rows('slajder_bannera',$post_id) ) : the_row();
                    $image = get_sub_field('yzobrazhenye_slajdera');
                    ?>
                    <div class="imp-one__slider-item swiper-slide">
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