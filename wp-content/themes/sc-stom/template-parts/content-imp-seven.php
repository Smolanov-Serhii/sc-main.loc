<?php
$post_id = get_the_ID();
?>
<section class="imp-seven">
    <div class="imp-seven__container main-container">
        <div class="imp-seven__left">
            <h2 class="imp-seven__name section-title">
                <?php echo get_field('ymya_doktora', $post_id)?>
            </h2>
            <div class="imp-seven__work">
                <?php echo get_field('dolzhnost', $post_id)?>
            </div>
            <div class="imp-seven__desc">
                <?php echo get_field('opysanye_doktora', $post_id)?>
            </div>
        </div>

        <div class="imp-seven__img">
            <img src="<?php echo get_field('fotografyya_doktora', $post_id)?>">
        </div>
    </div>
</section>