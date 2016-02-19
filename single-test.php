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

<?php
	$categories = get_the_category();

	if ( !empty( $categories ) ) {
			$catName = esc_html( $categories[0]->name ); // First category of the open post
			$catID = get_cat_ID( $catName ); // Returns the category ID of the Post based on first category of the post
			$catClass = strtolower(remove_accents( $catName )); // Removes uppercase and accents to use in html
	}
?>

<section class="other-posts-section main-section">
	<div class="container">

		<h1 class="other-posts_heading subsection-heading">
			<?php
			if($catName == 'Događanja') {	echo 'Najnovija';	} else { echo 'Najnovije'; } ?>
			<span class="<?php echo $catClass; ?>-text">
			<!-- Outputs the first category of the post currently open -->
			<?php echo $catName; ?>
			</span>
		</h1>

		<?php
			$args = array(
				'posts_per_page' => 3,
				'order'=> 'DESC',
				'orderby' => 'date',
			 	'category' => $catID,
				'exclude' => get_the_ID()
			);

			$posts = get_posts( $args );

			foreach ( $posts as $post ) :
			  setup_postdata( $post ); ?>

				<article class="other-posts third-section subsection">
					<header class="other-posts_header">
						<a class="other-posts_title <?php echo $catClass; ?>-all" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</header>
					<div class="other-posts_excerpt">
						<p>
							<?php echo excerpt(20); ?>
						</p>
					</div>
					<footer class="other-posts_footer">
						<span>Objavljeno <?php the_date(); ?></span>
					</footer>
				</article>

		<?php
			endforeach;
			wp_reset_postdata();
		?>

</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
