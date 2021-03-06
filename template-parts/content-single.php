<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Veleučilište_u_Šibeniku
 */

?>
<!--
	Post ID
id="post-<?php // the_ID(); ?>"

Post Class
 <?php // post_class(); ?>
-->

<article class="post-single">
	<header class="single-header">
		<?php the_title( '<h1 class="single-title">', '</h1>' ); ?>

		<div class="single-meta">
			<?php vus_posted_on(); ?>
			<?php vus_entry_footer(); ?>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php
	if(has_post_thumbnail()) { ?>
		<div class="single-image full-subsection" style="background-image:url(<?php extractImgSrc('single-post_thumbnail'); ?>)"></div>
	<?php } ?>

	<div class="single-content">

		<?php the_content(); ?>
	</div><!-- .entry-content -->


</article><!-- .post-single -->
