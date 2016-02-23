<section id="hero-section" class="main-section">



	<div class="container">
		<?php
		if(is_front_page()) {
			siteHeading();
		}
		// elseif(is_archive()) {
		// 	the_archive_title( '<h1 class="page-title">', '</h1>' );
		// }
		elseif(is_page()) {
			pageHeading();
		}

		?>
		<div class="hero-extras container-small">
			<a href="#" class="hero-extra third-section subsection">
				<div class="hero-extra_icon">
					<i class="fa fa-envelope"></i>
				</div>
				<span class="hero-extra_text">Email</span>
			</a>

			<a href="#" class="hero-extra third-section subsection">
				<div class="hero-extra_icon">
					<i class="fa fa-book"></i>
				</div>
				<span class="hero-extra_text">eLearning</span>
			</a>

			<a href="#" class="hero-extra third-section subsection">
				<div class="hero-extra_icon">
					<i class="fa fa-graduation-cap"></i>
				</div>
				<span class="hero-extra_text">ISVU</span>
			</a>
		</div>
	</div>

</section>
