<?php
// TODO: Kategorije
// TODO: Vrijeme
// TODO: Popravit Excerpt
// TODO: Ponašanje slike
?>
<section class="news-home main-section">
	<div class="container">
		<div id="home_news-container" class="half-section">
			<!-- Ispisuje dvi najnovije obavijesti s kategorijom 'news' -->
			<?php
				$newsCategoryID = 2; //the certain category ID
				$latestPosts = new WP_Query(
				array('posts_per_page' => 2, 'category__in' => array($newsCategoryID)));

				if($latestPosts->have_posts()) :
					while($latestPosts->have_posts()) :
						$latestPosts->the_post();
			?>
			<!-- SAV sadržaj i informacije od objave idu ode -->
					<div class="home-post full-section subsection">
						<a class="home-post_title href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
						<?php the_excerpt(); ?>
					</div>
			<?php
					endwhile;
				endif;
			?>
		</div>

		<div id="home_events-container" class="half-section">
			<!-- Ispisuje dvi najnovije obavijesti s kategorijom 'events' -->
			<?php
				$eventsCategoryID = 3; //the certain category ID
				$latestPosts = new WP_Query(
				array('posts_per_page' => 2, 'category__in' => array($eventsCategoryID)));

				if($latestPosts->have_posts()) :
					while($latestPosts->have_posts()) :
						$latestPosts->the_post();
			?>
			<!-- SAV sadržaj i informacije od objave idu ode -->
					<div class="home-post full-section subsection">
						<a class="home-post_title href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
						<?php the_excerpt(); ?>
					</div>
			<?php
					endwhile;
				endif;
			?>
		</div>
	</div>

</section>
