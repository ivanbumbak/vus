<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Veleučilište_u_Šibeniku
 */

get_header(); ?>

<section class="page-section main-section">
	<div class="container">
		<main id="main" class="site-main" role="main">
			<?php while(have_posts()) : the_post(); ?>
				<?php get_template_part('template-parts/content', 'page'); ?>
				<?php // the_post_navigation(); ?>
			<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
