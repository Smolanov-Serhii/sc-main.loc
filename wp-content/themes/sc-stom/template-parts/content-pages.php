<?php
$post_id = get_the_ID();
?>
<section class="pages">
    <div class="pages__container main-container">
        <div class="pages__text">
            <div class="pages__title">
                <?php echo get_field('zagolovok_straniczy', $post_id)?>
            </div>
            <?php
            if( have_rows('straniczy_linki',$post_id) ):
                while( have_rows('straniczy_linki',$post_id) ) : the_row();
                    $name = get_sub_field('nazvanie_straniczy');
                    $desc = get_sub_field('opisanie_straniczy');
                    $lnk = get_sub_field('ssylka_na_straniczu');
                    ?>
                    <div class="pages__content-item">
                        <div class="pages__content-item-title">
                            <?php echo $name;?>
                        </div>
                        <div class="pages__content-item-desc">
                            <?php echo $desc;?>
                        </div>
                        <a href="<?php echo $lnk;?>" class="pages__content-item-lnk button button-blue">
                            <span><?php echo get_field('nadpis_na_knopke_stranicz', $post_id)?></span>
                        </a>
                    </div>
                <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>





