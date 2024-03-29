<!-- begin hero section -->
<section class="mape-hero">
	<div id="carousel1" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-caption" style="z-index: 9;">
			<h1 class="fw-bold display-3 hero--title">
				<?php echo the_field('home_page_title'); ?>
				
			</h1>
			<p class="h3 pb-5 hero--sub">
				<?php echo the_field('home_page_subtitle'); ?>
				
			</p>
			<p><a href="about-us" class="btn btn-lg btn-warning text-uppercase fw-bold hero--cta">Find out More</a></p>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo get_home_url();?>/wp-content/uploads/mape-hero-image.jpg" class="d-block" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_home_url();?>/wp-content/uploads/mape-hero-image2.jpg" class="d-block" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo get_home_url();?>/wp-content/uploads/mape-hero-image3.jpg" class="d-block" alt="...">
			</div>
		</div>
	</div>
</section>
<!-- end hero section -->

