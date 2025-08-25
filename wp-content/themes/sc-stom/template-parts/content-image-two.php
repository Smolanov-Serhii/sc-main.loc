<?php
$post_id = get_the_ID();
?>
<section class="image-one">
    <div class="image-one__container main-container tabs-elements">
        <?php
            if (get_field('video_image_two', $post_id)){
                ?>
                <video width="100%" height="100%" poster="<?php echo the_field('kartinka_2', $post_id);?>" autoplay preload="metadata" loop  muted playsinline>
                    <source src="<?php the_field('video_image_two', $post_id);?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <?php
            } else {
                ?>
                <picture>
                    <source media="(min-width: 768px)" srcset="<?php echo get_field('kartinka_2', $post_id)?>">
                    <img src="<?php echo get_field('kartinka_mob2', $post_id)?>" alt="<?php echo get_field('zagolovok_banera', $post_id)?>">
                </picture>
                <?php
            }
        ?>

    </div>
</section>