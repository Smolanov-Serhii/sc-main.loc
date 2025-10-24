<?php
/* Template Name: Виниры */
$post_id = get_the_ID();
get_header();
?>
    <main class="main imp">
        <?php get_template_part( 'template-parts/content', 'imp-one-vert' ); ?>
        <section class="imp-two-tags">
            <div class="imp-two-tags__container main-container">
                <div class="imp-two-tags__text">
                    <div class="imp-two-tags__left">
                        <h2 class="imp-two-tags__title section-title">
                            <?php echo get_field('zaglovok_bloka_novj_2', $post_id)?>
                        </h2>
                    </div>
                    <div class="imp-two-tags__desc">
                        <?php echo get_field('podzaglovok_bloka_novj_3', $post_id)?>
                    </div>
                </div>
                <div class="imp-two-tags__tags">
                    <?php
                    if( have_rows('tegy_bloka_dop',$post_id) ):
                        while( have_rows('tegy_bloka_dop',$post_id) ) : the_row();
                            $item = get_sub_field('zagolovok_tega');
                            ?>
                            <div class="imp-two-tags__tags-item">
                                <?php echo $item;?>
                            </div>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <div class="imp-two-tags__slider swiper-container">
                    <?php
                    if( have_rows('foto_bloka_tegy_dop',$post_id) ):
                        echo '<div class="imp-two-tags__wrapper swiper-wrapper">';
                        while( have_rows('foto_bloka_tegy_dop',$post_id) ) : the_row();
                            $image = get_sub_field('kartynka_v_slajder');
                            ?>
                            <div class="imp-two-tags__slider-item swiper-slide">
                                <img src="<?php echo $image;?>">
                            </div>
                        <?php
                        endwhile;
                        while( have_rows('foto_bloka_tegy_dop',$post_id) ) : the_row();
                            $image = get_sub_field('kartynka_v_slajder');
                            ?>
                            <div class="imp-two-tags__slider-item swiper-slide">
                                <img src="<?php echo $image;?>">
                            </div>
                        <?php
                        endwhile;
                        echo '</div>';
                    endif;
                    ?>
                </div>
            </div>
        </section>
        <?php get_template_part( 'template-parts/content', 'imp-two-brek' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-three' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-four' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-seven-slider' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-nine' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-ten' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-eleven' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-tv' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
    </main>
<?php
get_footer();




