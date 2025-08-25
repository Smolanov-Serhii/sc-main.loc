<?php
$post_id = get_the_ID();
?>
<section class="services" id="services">
    <div class="services__container main-container tabs-elements">
        <div class="services__tabs">
            <?php
            if( have_rows('perechen_uslug',$post_id) ):
                while( have_rows('perechen_uslug',$post_id) ) : the_row();
                    $tabname = get_sub_field('nazvanie_uslugi');
                    ?>
                        <div class="services__tabs-item tabs-nav-item">
                            <?php echo $tabname;?>
                        </div>
                    <?php
                endwhile;
            endif;
            ?>

        </div>
        <div class="services__contents">
            <?php
            if( have_rows('perechen_uslug',$post_id) ):
                $counter = 0;
                while( have_rows('perechen_uslug',$post_id) ) : the_row();
                    $counter ++;
                    ?>
                    <div class="services__contents-item tabs-content-item <?php if ($counter == 1) {
                        echo 'active';
                    } ?>">
                    <?php
                    if( have_rows('uslugi_v_gruppe') ):
                        while( have_rows('uslugi_v_gruppe') ) : the_row();
                            $name = get_sub_field('nazvanie');
                            $desc = get_sub_field('opisanie');
                            $image = get_sub_field('kartinka_predlozheniya');
                            $price = get_sub_field('czena');
                            $lnk = get_sub_field('sslka_na_stranyczu');
                            ?>
                            <div class="services__contents-elem">
                                <div class="services__contents-text">
                                    <div class="services__contents-name">
                                        <?php echo $name;?>
                                    </div>
                                    <div class="services__contents-desc">
                                        <?php echo $desc;?>
                                    </div>
                                    <div class="services__contents-price">
                                        <?php echo $price;?>
                                        <?php
                                            if ($lnk){
                                                echo '<a style="margin-left: 1em; color: #000; text-decoration: none;" href="'.$lnk.'" target="_blank">'. get_field('tekst_podrobnee', $post_id).' ></a>';
                                            }
                                        ?>

                                    </div>
                                </div>
                                <div class="services__contents-img">
                                    <img src="<?php echo $image;?>" alt="<?php echo $name;?>">
                                </div>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                        </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <div id="about"></div>
</section>