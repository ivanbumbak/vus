<?php
// TODO: Kategorije
// TODO: Vrijeme
// TODO: Popravit Excerpt
// TODO: Ponašanje slike
?>
<section class="news-home main-section">
	<div class="container">
		<div id="home_news-container" class="half-section">
			<h1 class="subsection-heading">Novosti</h1>

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
					<article class="home-post full-section subsection">
						<?php
						if(has_post_thumbnail()) { ?>
						<a href="<?php echo get_permalink(); ?>" class="home-post_image">
							<?php the_post_thumbnail('home-post_thumbnail'); ?>
						</a>
						<?php } ?>
						<content>
							<header class="home-post_header">
								<a class="home-post_title" href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a>
							</header>
							<div class="home-post_excerpt">
								<p><?php echo excerpt(10); ?></p>
							</div>
							<footer class="home-post_footer">
								<?php vus_posted_on(); ?>
							</footer>
						</content>

					</article>
			<?php
					endwhile;
				endif;
			?>
		</div>

		<div id="home_events-container" class="half-section">
			<h1 class="subsection-heading">Događanja</h1>
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
			<article class="home-post full-section subsection">
				<?php
				if(has_post_thumbnail()) { ?>
				<a href="<?php echo get_permalink(); ?>" class="home-post_image">
					<?php the_post_thumbnail('home-post_thumbnail'); ?>
				</a>
				<?php } ?>
				<content>
					<header class="home-post_header">
						<a class="home-post_title" href="<?php echo get_permalink(); ?>"> <?php the_title(); ?> </a>
					</header>
					<div class="home-post_excerpt">
						<p><?php echo excerpt(10); ?></p>
					</div>
					<footer class="home-post_footer">
						<?php vus_posted_on(); ?>
					</footer>
				</content>

			</article>
			<?php
					endwhile;
				endif;
			?>
		</div>
	</div>

</section>
