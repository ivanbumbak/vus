<?php

/**
 * Template Name: Studij
 * The template for displaying pages for studies.
 * TODO: Podjela po godinama za raspored (nekakav dropdown mozda)
 * TODO: Raspored (pdf)
 * TODO: Ispiti (tablica)
 * TODO: Nastavni plan (velika tablica)
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
