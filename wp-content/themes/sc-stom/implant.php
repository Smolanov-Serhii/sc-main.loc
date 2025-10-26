<?php
/* Template Name: Имплантация */
$post_id = get_the_ID();
get_header();
?>
    <main class="main imp">
        <?php get_template_part( 'template-parts/content', 'imp-one' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-two' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-three' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-four' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-five' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-six' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-seven-slider' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-eight' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-nine' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-ten' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-eleven' ); ?>
        <?php get_template_part( 'template-parts/content', 'imp-tv' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
    </main>
<?php
get_footer();




