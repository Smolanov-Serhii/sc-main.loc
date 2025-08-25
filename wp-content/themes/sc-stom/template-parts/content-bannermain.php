<?php
$post_id = get_the_ID();
?>
<section class="bannermain">
    <div class="bannermain__container main-container">
        <div class="bannermain__title pages__title">
            <?php echo get_field('zagolovok_banera', $post_id)?>
        </div>
        <div class="bannermain__slider">
            <div class="bannermain__slider-img" >
                <div class="bannermain__slider-play has-video" data-video="<?php echo get_field('osnovnoe_video', $post_id)?>">
                    <svg width="101" height="101" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <foreignObject x="-30" y="-30" width="161" height="161"><div xmlns="http://www.w3.org/1999/xhtml" style="clip-path:url(#bgblur_0_1513_76_clip_path);height:100%;width:100%"></div></foreignObject><circle data-figma-bg-blur-radius="30" cx="50.5" cy="50.5" r="50" fill="#FBFBFB" fill-opacity="0.17" stroke="white"/>
                        <path d="M72.9917 50.6473L39.2543 72.4581L39.2543 28.8365L72.9917 50.6473Z" fill="white"/>
                        <defs>
                            <clipPath id="bgblur_0_1513_76_clip_path" transform="translate(30 30)"><circle cx="50.5" cy="50.5" r="50"/>
                            </clipPath></defs>
                    </svg>
                </div>
                <img src="<?php echo get_field('osnovnaya_kartinka', $post_id)?>" alt="">
            </div>
            <div class="bannermain__slider-slider swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                    <?php
                    if( have_rows('slajder',$post_id) ):
                        while( have_rows('slajder',$post_id) ) : the_row();
                            $img = get_sub_field('slajd');
                            ?>
                            <div class="bannermain__slider-item swiper-slide">
                                <img src="<?php echo $img;?>" alt="">
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <div class="bannermain__img">
            <img src="<?php echo get_field('pravaya_kartinka', $post_id)?>" alt="">
        </div>
    </div>
</section>