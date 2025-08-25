<?php
$post_id = get_the_ID();
?>
<section class="parts">
    <div class="parts__container main-container">
        <div class="parts__wrapper">
            <div class="parts__content">
                <?php
                if( have_rows('tipy_proczedur',$post_id) ):
                    while( have_rows('tipy_proczedur',$post_id) ) : the_row();
                        $desc = get_sub_field('opisanie_proczedury');
                        $name = get_sub_field('nazvanie_proczedury');
                        ?>
                        <div class="parts__content-item">
                            <div class="parts__content-item-title">
                                <?php echo $name;?>
                            </div>
                            <?php echo $desc;?>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>