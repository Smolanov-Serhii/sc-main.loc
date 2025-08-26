<?php
$post_id = get_the_ID();
?>
<section class="imp-five">
    <div class="imp-five__container main-container">
        <h2 class="imp-five__title section-title">
            <?php echo get_field('zagolovok_pyatogo_bloka', $post_id)?>
        </h2>
        <div class="imp-five__desc">
            <?php echo get_field('opysanye_pyatogo_bloka', $post_id)?>
        </div>
        <div class="imp-five__btns">
            <div class="imp-five__btn button button-white js-messenger">
                <span><?php echo get_field('tekst_beloj_knopky_5', $post_id)?></span>
            </div>
            <div class="imp-five__btn button button-blue js-zapis">
                <span><?php echo get_field('tekst_tmnoj_knopky_5', $post_id)?></span>
            </div>
        </div>
    </div>
</section>