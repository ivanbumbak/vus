<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Veleučilište_u_Šibeniku
 */

get_header(); ?>

<section class="single-post-section main-section">
	<div class="container">
		<main id="main" class="site-main" role="main">

		<?php while(have_posts()) : the_post(); ?>
			<?php get_template_part('template-parts/content', 'single'); ?>
			<?php // the_post_navigation(); ?>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

</section>

<section class="other-posts-section main-section">
	<div class="container">
		<h1 class="other-posts_heading subsection-heading">Najnovije objave</h1>
		<div class="other-posts third-section subsection">
			<header class="other-posts_header"><h2>Other Post Header Testerino Peperoni Riperino</h2></header>
			<p class="other-posts_excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mi.</p>
			<footer class="other-posts_footer">
				<span>Posted on December 56, 2077</span>
			</footer>
		</div>

		<div class="other-posts third-section subsection">
			<header class="other-posts_header"><h2>Other Post Header</h2></header>
			<p class="other-posts_excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mi.</p>
			<footer class="other-posts_footer">
				<span>Posted on December 56, 2077</span>
			</footer>
		</div>

		<div class="other-posts third-section subsection">
			<header class="other-posts_header"><h2>Other Post Header</h2></header>
			<p class="other-posts_excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mi.</p>
			<footer class="other-posts_footer">
				<span>Posted on December 56, 2077</span>
			</footer>
		</div>
	</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
