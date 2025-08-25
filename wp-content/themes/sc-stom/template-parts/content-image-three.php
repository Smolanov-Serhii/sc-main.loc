<?php
$post_id = get_the_ID();
?>
<section class="image-one">
    <div class="image-one__container main-container tabs-elements">
        <?php
            if (get_field('video_image_one', $post_id)){
                ?>
                <video width="100%" height="100%" poster="<?php echo the_field('kartinka_3', $post_id);?>" autoplay preload="metadata" loop  muted playsinline>
                    <source src="<?php the_field('video_image_three', $post_id);?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <?php
            } else {
                ?>
                    <img src="<?php echo get_field('kartinka_3', $post_id)?>" alt="">
                <?php
            }
        ?>

    </div>
	<div id="rev"></div>
	</div>
</section>