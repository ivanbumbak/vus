<?php

// TODO: Ograničit broj objava
// TODO: Bolje rješenje za naslov stranice

get_header(); ?>

	<section class="page-section main-section">
		<div class="container">

			<h1 class="archive-page_title section-heading"><?php single_cat_title(); ?></h1>

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php
					if(have_posts()) {
						while (have_posts()) {
							the_post();
							get_template_part('template-parts/content', get_post_format());
						}
						the_posts_navigation();
					}
					else {
						get_template_part( 'template-parts/content', 'none' );
					}
					?>

					</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
