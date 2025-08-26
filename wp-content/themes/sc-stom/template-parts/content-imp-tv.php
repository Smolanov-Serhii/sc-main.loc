<?php
$post_id = get_the_ID();
?>
<section class="imp-tv">
    <div class="imp-tv__container main-container">
        <div class="imp-tv__img">
            <img src="<?php echo get_field('kartynka_bloka_12', $post_id)?>">
        </div>
        <div class="imp-tv__right">
            <div class="imp-tv__content">
                <?php echo get_field('kontent_bloka_12', $post_id)?>
            </div>
            <div class="imp-tv__btns">
                <div class="button button-white js-messenger">
                    <span> <?php echo get_field('tekst_beloj_knopky_12', $post_id)?></span>
                </div>
                <div class="button button-blue js-zapis">
                    <span><?php echo get_field('tekst_synej_knopky_12', $post_id)?></span>
                </div>
            </div>
        </div>
    </div>
</section>


