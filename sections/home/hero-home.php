<section id="hero-section" class="main-section">



	<div class="container">
		<?php
		if(is_front_page()) {
			siteHeading();
		}
		else {
			pageHeading();
		}

		?>
		<!-- <img id="site-logo" src="http://i.imgur.com/6mcBIYX.jpg"> -->

		<div class="hero-extras">
			<div  class="hero-extra third-section subsection">
				<a href="#"><i class="fa fa-envelope"></i>Email</a>
			</div>
			<div  class="hero-extra third-section subsection">
				<a href="#"><i class="fa fa-book"></i>eLearning</a>
			</div>
			<div  class="hero-extra third-section subsection">
				<a href="#"><i class="fa fa-graduation-cap"></i>ISVU</a>
			</div>
		</div>
	</div>

</section>
