<?php
$post_id = get_the_ID();
?>
<section class="imp-eight">
    <div class="imp-eight__container main-container">
        <div class="imp-eight__main">
            <div class="swiper-container">
                <?php
                if( have_rows('slider_otzvov',$post_id) ):
                    echo '<div class="imp-eight__wrapper swiper-wrapper">';
                    while( have_rows('slider_otzvov',$post_id) ) : the_row();
                        $imageBig = get_sub_field('bolshoe_foto_slajda');
                        $name = get_sub_field('ymya');
                        $rev = get_sub_field('otzv');
                        ?>
                        <div class="imp-eight__item swiper-slide">
                            <div class="imp-eight__img">
                                <img src="<?php echo $imageBig;?>">
                            </div>
                            <div class="imp-eight__text main-container">
                                <div class="imp-eight__name">
                                    <?php echo $name;?>
                                </div>
                                <div class="imp-eight__rev">
                                    <?php echo $rev;?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    while( have_rows('slider_otzvov',$post_id) ) : the_row();
                        $imageBig = get_sub_field('bolshoe_foto_slajda');
                        $name = get_sub_field('ymya');
                        $rev = get_sub_field('otzv');
                        ?>
                        <div class="imp-eight__item swiper-slide ">
                            <div class="imp-eight__img">
                                <img src="<?php echo $imageBig;?>">
                            </div>
                            <div class="imp-eight__text main-container">
                                <div class="imp-eight__name">
                                    <?php echo $name;?>
                                </div>
                                <div class="imp-eight__rev">
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
        <div class="imp-eight__list swiper-container">
            <?php
            if( have_rows('slider_otzvov',$post_id) ):
                echo '<div class="imp-eight__wrapper swiper-wrapper">';
                while( have_rows('slider_otzvov',$post_id) ) : the_row();
                    $imageSmall = get_sub_field('pryvyu_slajda');
                    ?>
                    <div class="imp-eight__item swiper-slide">
                        <img src="<?php echo $imageSmall;?>">
                    </div>
                <?php
                endwhile;
                while( have_rows('slider_otzvov',$post_id) ) : the_row();
                    $imageSmall = get_sub_field('pryvyu_slajda');
                    ?>
                    <div class="imp-eight__item swiper-slide">
                        <img src="<?php echo $imageSmall;?>">
                    </div>
                <?php
                endwhile;
                echo '</div>';
            endif;
            ?>
        </div>
    </div>
</section>


