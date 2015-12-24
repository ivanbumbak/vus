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
			<?php postsInCategory('Novosti', 2, 10, 'full-section'); ?>
		</div>

		<div id="home_events-container" class="half-section">
			<h1 class="subsection-heading">Događanja</h1>
			<?php postsInCategory('Događanja', 2, 10, 'full-section'); ?>
		</div>
	</div>

</section>
