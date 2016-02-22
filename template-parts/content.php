<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Veleučilište_u_Šibeniku
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="archive-post_image" style="background-image: url(<?php extractImgSrc('home-post_thumbnail'); ?>);"></section>

	<section class="archive-post_content">
		<header class="archive-post_header">

			<?php
				the_title('<h2 class="archive-post_title">', '</h2>');
			?>

			<?php
				if('post' === get_post_type()) { ?>

				<div class="archive-post_meta">
					<?php vus_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php } ?>
		</header><!-- .entry-header -->

		<div class="archive-post_excerpt">
			<?php
				the_excerpt();
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vus' ),
					'after'  => '</div>',
				));
			?>
		</div><!-- .entry-content -->

		<footer class="archive-post_footer">
			<?php vus_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</section>

</article><!-- #post-## -->
