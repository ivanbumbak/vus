<?php
/**
  * Template Name: Studentski Programi
  * Template for the student programs
  * @link https://codex.wordpress.org/Template_Hierarchy
  * @package Veleučilište_u_Šibeniku
  */

 get_header(); ?>
<section class="page-news-section main-section">
  <div class="container">
    <?php postsInCategory('Informatička Sekcija', 3, 20, 'program-page_post third-section'); ?>
  </div>
</section>
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
