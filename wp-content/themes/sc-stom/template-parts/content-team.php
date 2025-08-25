<?php
$post_id = get_the_ID();
?>
<section class="team" id="team">
    <div class="team__container main-container">
        <div class="team__wrapper swiper-container">
            <div class="team__list swiper-wrapper">
                <?php
                if( have_rows('perechen_sotrudnikov',$post_id) ):
                    while( have_rows('perechen_sotrudnikov',$post_id) ) : the_row();
                        $fio = get_sub_field('fio');
                        $work = get_sub_field('dolzhnost');
                        $img = get_sub_field('foto');
                        $desc = get_sub_field('opisanie');
                        ?>
                        <div class="team__item swiper-slide">
                            <div class="team__item-name">
                                <?php echo $fio;?>
                            </div>
                            <div class="team__item-work">
                                <?php echo $work;?>
                            </div>
                            <div class="team__item-image">
                                <img src="<?php echo $img;?>" alt="<?php echo $fio;?>">
                            </div>
                            <div class="team__item-desc">
                                <?php echo $desc;?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>