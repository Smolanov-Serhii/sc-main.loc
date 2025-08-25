<?php
$post_id = get_the_ID();
?>
<section class="imp-nine">
    <div class="imp-nine__container main-container">
        <div class="imp-nine__top">
            <h2 class="imp-nine__title section-title">
                <?php echo get_field('zagolovok_bloka_9', $post_id)?>
            </h2>
            <div class="imp-nine__desc">
                <?php echo get_field('opysanye_bloka_9', $post_id)?>
            </div>
        </div>
        <div class="imp-nine__slider">
            <div class="swiper-container">
                <?php
                if( have_rows('slajder_bloka_9',$post_id) ):
                    echo '<div class="imp-nine__wrapper swiper-wrapper">';
                    while( have_rows('slajder_bloka_9',$post_id) ) : the_row();
                        $image = get_sub_field('kartynka_slajda');
                        $name = get_sub_field('ymya');
                        $rev = get_sub_field('otzv');
                        ?>
                        <div class="imp-nine__slide swiper-slide">
                            <div class="imp-nine__img">
                                <img src="<?php echo $image;?>">
                            </div>
                            <div class="imp-nine__text">
                                <div class="imp-nine__name">
                                    <?php echo $name;?>
                                </div>
                                <div class="imp-nine__rev">
                                    <?php echo $rev;?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    echo '</div>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>


