<!-- begin desktop nav -->
<header class="d-none d-lg-block">
	<nav class="navbar navbar-expand-lg fixed-top shadow" style="background: #e9e9e9;">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>" >
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/mape-web-logo.webp" alt="Mid-Atlantic Propane Exchange" class="img-fluid" width="200">	
			</a>
			<button class="navbar-toggler rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#dmiNav" aria-controls="dmiNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars fa-2x"></i>
			</button>
			<div class="collapse navbar-collapse text-uppercase font-weight-bold" id="dmiNav">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav ms-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
				
			</div>
		</div>
	</nav>
</header>
<!-- end desktop nav -->
<!-- begin mobile offcanvas nav -->
<header class="d-block d-lg-none">
	<nav class="navbar fixed-top shadow" style="background: #e9e9e9;">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
    			<img src="<?php echo get_home_url(); ?>/wp-content/uploads/mape-web-logo.webp" alt="Mid-Atlantic Propane Exchange" width="200" class="img-fluid">
    		</a>
    		<br>
    		<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    			<div class="offcanvas-header">
    				<h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navigation</h5>
    				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    			</div>
    			<div class="offcanvas-body">
    				<div class="text-center mb-4">
    				<a href="<?php echo get_home_url(); ?>">
    					<img src="<?php echo get_home_url(); ?>/wp-content/uploads/mape-web-logo.webp" alt="Mid-Atlantic Propane Exchange" width="200" class="img-fluid">
    					<br />
    				</a>
    				</div>
    				<?php
    				wp_nav_menu( array(
    					'theme_location'    => 'primary',
    					'depth'             => 2,
    					'container'         => '',
    					'container_class'   => '',
    					'container_id'      => '',
    					'menu_class'        => 'navbar-nav justify-content-end flex-grow-1 pe-3',
    					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    					'walker'            => new WP_Bootstrap_Navwalker(),
    				)); ?>
    				<form class="d-flex" role="search">
    					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" value="<?php echo esc_html($s, 1); ?>" name="s" id="searchMAPE" maxlength="33" required>
    					<button class="btn btn-outline-primary" type="submit">Search</button>
    				</form>
    			</div>
    		</div>
  		</div>
	</nav>
</header>
<!-- end mobile offcanvas nav -->
