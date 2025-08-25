<?php
/* Template Name: Главная */
$post_id = get_the_ID();
get_header();
?>

	<main class="main">
        <?php get_template_part( 'template-parts/content', 'bannermain' ); ?>
        <?php get_template_part( 'template-parts/content', 'pages' ); ?>
        <?php get_template_part( 'template-parts/content', 'video' ); ?>
        <?php get_template_part( 'template-parts/content', 'map' ); ?>
	</main>

<?php
get_footer();




