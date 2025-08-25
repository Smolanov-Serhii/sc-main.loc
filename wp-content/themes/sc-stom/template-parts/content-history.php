<?php
$post_id = get_the_ID();
?>
<section class="history" id="historys">
    <div class="history__container main-container">
        <div class="swiper-container">
            <div class="history__slider swiper-wrapper">
                <?php
                if( have_rows('perechen_istorij',$post_id) ):
                    while( have_rows('perechen_istorij',$post_id) ) : the_row();
                        $image = get_sub_field('izobrazhenie_istorii');
                        $name = get_sub_field('imya');
                        $title = get_sub_field('zagolovok_istorii');
                        $desc = get_sub_field('opisanie');
                        ?>
                        <div class="history__slider-item swiper-slide">
                            <div class="history__slider-img">
                                <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                            </div>
                            <div class="history__slider-content">
                                <div class="history__slider-title">
                                    <?php echo $title;?>
                                </div>
                                <div class="history__slider-desc">
                                    <?php echo $desc;?>
                                </div>
                                <div class="history__slider-name">
                                    <div class="swiper-nav">
                                        <div class="prev">
                                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M27 13.5H2M2 13.5L13.5385 1M2 13.5L13.5385 26" stroke="#CDCDCD" stroke-width="2.54545"/>
                                            </svg>
                                        </div>
                                        <div class="next">
                                            <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 18.5H38M38 18.5L20.4615 1M38 18.5L20.4615 36" stroke="#7A7A7A" stroke-width="2.54545"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <?php echo $name;?>
                                </div>
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