<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Veleučilište_u_Šibeniku
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="single-header">
		<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>

		<div class="single-meta">
			<?php vus_posted_on(); ?>
		</div><!-- .entry-meta -->

		<div class="single-extras">
			<?php vus_entry_footer(); ?>
		</div><!-- .entry-footer -->

	</header><!-- .entry-header -->

	<div class="single-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
