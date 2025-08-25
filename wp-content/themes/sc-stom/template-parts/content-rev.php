<?php
$post_id = get_the_ID();
?>
<section class="rev">
    <div class="rev__container main-container">
        <div class="swiper-container">
            <div class="rev__slider swiper-wrapper">
                <?php
                if( have_rows('otzyvy',$post_id) ):
                    while( have_rows('otzyvy',$post_id) ) : the_row();
                        $image = get_sub_field('kartinka_dlya_otzyva');
                        $video = get_sub_field('video_dlya_otzyva');
                        $title = get_sub_field('zagolovok_otzyva');
                        $desc = get_sub_field('otzyv');
                        ?>
                        <div class="rev__slider-item swiper-slide">
                            <div class="rev__slider-content">
                                <div class="rev__slider-title">
                                    <?php echo $title;?>
                                </div>
                                <div class="rev__slider-desc">
                                    <svg class="left" width="38" height="28" viewBox="0 0 38 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.3082 0.174805C36.6458 2.9716 35.9466 5.9892 35.2106 9.22761C34.4746 12.466 33.8122 15.6308 33.2234 18.722C32.6346 21.8132 32.1562 24.6468 31.7882 27.2228H21.3002L20.5274 26.0084C21.1898 23.4324 22.0362 20.6724 23.0666 17.7284C24.097 14.7108 25.2378 11.6932 26.489 8.67561C27.7402 5.65801 28.9546 2.82441 30.1322 0.174805H37.3082ZM16.8842 0.174805C16.2218 2.9716 15.5226 5.9892 14.7866 9.22761C14.0506 12.466 13.3882 15.6308 12.7994 18.722C12.2106 21.8132 11.7322 24.6468 11.3642 27.2228H0.986619L0.324219 26.0084C0.986619 23.4324 1.83302 20.6724 2.86342 17.7284C3.89382 14.7108 4.99782 11.6932 6.17542 8.67561C7.42662 5.65801 8.64102 2.82441 9.81862 0.174805H16.8842Z" fill="#D9D9D9"/>
                                    </svg>
                                    <?php echo $desc;?>
                                    <svg class="right" width="38" height="28" viewBox="0 0 38 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M37.3082 0.174805C36.6458 2.9716 35.9466 5.9892 35.2106 9.22761C34.4746 12.466 33.8122 15.6308 33.2234 18.722C32.6346 21.8132 32.1562 24.6468 31.7882 27.2228H21.3002L20.5274 26.0084C21.1898 23.4324 22.0362 20.6724 23.0666 17.7284C24.097 14.7108 25.2378 11.6932 26.489 8.67561C27.7402 5.65801 28.9546 2.82441 30.1322 0.174805H37.3082ZM16.8842 0.174805C16.2218 2.9716 15.5226 5.9892 14.7866 9.22761C14.0506 12.466 13.3882 15.6308 12.7994 18.722C12.2106 21.8132 11.7322 24.6468 11.3642 27.2228H0.986619L0.324219 26.0084C0.986619 23.4324 1.83302 20.6724 2.86342 17.7284C3.89382 14.7108 4.99782 11.6932 6.17542 8.67561C7.42662 5.65801 8.64102 2.82441 9.81862 0.174805H16.8842Z" fill="#D9D9D9"/>
                                    </svg>
                                </div>
                                <div class="rev__slider-btn button button-blue js-form">
                                    <span><?php echo get_field('pekst_na_knopke_otzyvov', $post_id)?></span>
                                </div>
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
                            </div>
                            <div class="rev__slider-img">
                                <?php
                                if ($video){
                                    ?>
                                    <video controls preload="none" width="100%" height="100%" poster="<?php echo $image;?>">
                                        <source src="<?php echo $video;?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                                    <?php
                                }
                                ?>
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