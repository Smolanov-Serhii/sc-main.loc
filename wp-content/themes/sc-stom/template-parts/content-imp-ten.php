<?php
$post_id = get_the_ID();
?>
<section class="imp-ten">
    <div class="imp-ten__container main-container">
        <div class="imp-ten__top">
            <h2 class="imp-ten__title section-title">
                <?php echo get_field('zagolovok_bloka_10', $post_id)?>
            </h2>
            <div class="imp-ten__desc">
                <?php echo get_field('opysanye_bloka_10', $post_id)?>
            </div>
        </div>
        <div class="imp-ten__list">
            <?php
            if( have_rows('perechen_czen',$post_id) ):
                while( have_rows('perechen_czen',$post_id) ) : the_row();
                    $text = get_sub_field('opysanye');
                    $price = get_sub_field('czena');
                    ?>
                    <div class="imp-ten__item <?php if ($price == 'none'){ echo 'single-item';} ?>">
                        <div class="imp-ten__item-text">
                            <?php echo $text;?>
                        </div>
                        <?php
                            if ($price == "none"){
                                ?>

                                <?php
                            } else {
                                ?>
                                <div class="imp-ten__item-price">
                                    <?php echo $price;?>
                                </div>
                                <?php
                            }

                        ?>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
        <div class="imp-ten__btns">
            <div class="button button-blue js-messenger">
                <span><?php echo get_field('tekst_tmnoj_knopky', $post_id)?></span>
            </div>
            <div class="button button-white js-zapis">
                <span><?php echo get_field('tekst_svetloj_knopky', $post_id)?></span>
            </div>
        </div>
    </div>
</section>


