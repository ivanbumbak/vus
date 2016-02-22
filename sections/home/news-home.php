<?php
// TODO: Kategorije
// TODO: Vrijeme
// TODO: Ponašanje slike
?>
<section class="news-home main-section">
	<div class="container">
		<div id="home_news-container" class="home-posts_container half-section">
			<a href="<?php getCatUrl('Novosti'); ?>" class="subsection-heading">Novosti<i class="fa fa-angle-double-right"></i></a>
			<?php postsInCategory('Novosti', 2, 20, 'full-section'); ?>
		</div>

		<div id="home_events-container" class="home-posts_container half-section">
			<a href="<?php getCatUrl('Događanja'); ?>" class="subsection-heading">Događanja<i class="fa fa-angle-double-right"></i></a>
			<?php postsInCategory('Događanja', 2, 20, 'full-section'); ?>
		</div>
	</div>
</section>
