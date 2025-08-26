<?php
$post_id = get_the_ID();
?>
<section class="imp-eleven">
    <div class="imp-eleven__img">
        <img src="<?php echo get_field('kartynka_bloka_11', $post_id)?>">
    </div>
    <div class="imp-eleven__container main-container">
        <div class="imp-eleven__content">
            <?php echo get_field('kontent_bloka_11', $post_id)?>
        </div>
        <div class="imp-eleven__bottom">
            <div class="imp-eleven__desc">
                <?php echo get_field('opysanye_bloka_11', $post_id)?>
            </div>
            <div class="imp-eleven__btns">
                <div class="button button-blue js-zapis">
                    <span><?php echo get_field('nadpys_na_knopke_11', $post_id)?></span>
                </div>
            </div>
        </div>
    </div>
</section>


