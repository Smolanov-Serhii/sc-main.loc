<?php
$post_id = get_the_ID();
?>
<section class="text">
    <div class="text__container main-container">
        <div class="text__text">
            <div class="text__top">
                <?php echo get_field('verhnij_tekst', $post_id)?>
            </div>
            <div class="text__center">
                <?php echo get_field('krupnyj_tekst', $post_id)?>
            </div>
            <div class="text__bottom">
                <div class="text__bottom-text">
                    <?php echo get_field('tekst_v_bloke_knopki', $post_id)?>
                </div>
                <div class="button button-blue js-form">
                    <span><?php echo get_field('tekst_konsultacziya', $post_id)?></span>
                </div>
            </div>
        </div>
    </div>
</section>