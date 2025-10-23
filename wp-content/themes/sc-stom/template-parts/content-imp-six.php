<?php
$post_id = get_the_ID();
?>
<section class="imp-six imp-six-brek">
    <div class="imp-six__container main-container">
        <div class="imp-six__left">
            <h2 class="imp-six__title section-title">
                <?php echo get_field('zagolovok_shestogo_bloka', $post_id)?>
            </h2>
            <div class="imp-two__subtitle section-subtitle">
                <?php echo get_field('podzagolovok_shestogo_bloka', $post_id)?>
            </div>
        </div>
        <div class="imp-six__list">
            <?php
            if( have_rows('perechen_lementov_v_shestom_bloke',$post_id) ):
                while( have_rows('perechen_lementov_v_shestom_bloke',$post_id) ) : the_row();
                    $image = get_sub_field('kartynka_lementa');
                    $text = get_sub_field('opysanye_lementa');
                    ?>
                    <div class="imp-six__item">
                        <div class="imp-six__item-img">
                            <img src="<?php echo $image;?>">
                        </div>
                        <div class="imp-six__item-text">
                            <?php echo $text;?>
                        </div>

                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>