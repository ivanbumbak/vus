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

		<div class="schedules half-section divider">
			<!-- Modal/Schedule Button -->
			<div id="scheduleIM1" class="schedule third-section subsection">
				<i class="schedule-icon fa fa-calendar"></i>
				<span class="schedule-text">1</span>
			</div>

			<!-- Modal -->
			<div class="modal-bg"></div>
			<div id="modalIM1" class="schedule-modal">
				<div class="container">
					<header class="schedule-modal_header">
						<h2>Informatički Menadžment 1. Godina
							<i class="close-modal fa fa-close"></i>
						</h2>
					</header>
					<!-- PDF Goes Here -->
				</div>
			</div>

			<!-- Modal/Schedule Button -->
			<div id="scheduleIM2" class="schedule third-section subsection">
				<i class="schedule-icon fa fa-calendar"></i>
				<span class="schedule-text">2</span>
			</div>

			<!-- Modal -->
			<div class="modal-bg"></div>
			<div id="modalIM2" class="schedule-modal">
				<div class="container">
					<header class="schedule-modal_header">
						<h2>Informatički Menadžment 2. Godina
							<i class="close-modal fa fa-close"></i>
						</h2>
					</header>
					<!-- PDF Goes Here -->
				</div>
			</div>

			<!-- Modal/Schedule Button -->
			<div id="scheduleIM3" class="schedule third-section subsection">
				<i class="schedule-icon fa fa-calendar"></i>
				<span class="schedule-text">3</span>
			</div>

			<!-- Modal -->
			<div class="modal-bg"></div>
			<div id="modalIM3" class="schedule-modal">
				<div class="container">
					<header class="schedule-modal_header">
						<h2>Informatički Menadžment 3. Godina
							<i class="close-modal fa fa-close"></i>
						</h2>
					</header>
					<!-- PDF Goes Here -->
				</div>
			</div>

		</div>
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
