<!-- begin footer -->
<footer class="mape-footer">
	<a href="javascript:" id="back-up" class="text-center" title="Back to Top">
		<i class="fas fa-chevron-up fa-lg text-white"></i>
	</a>
	<div class="container">
		<div class="row pt-5 pb-5">
			<div class="col-lg-4 pt-3 pb-3 text-center">
				<h3 class="pt-4"></h3>
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/mid-atlantic-propane-exchange-footer-logo.png" class="img-fluid" alt="Mid-Atlantic Propane Exchange" />
			</div>
			<div class="col-lg-4 pb-3">
				<h3 class="text-warning text-center">Contact Us:</h3>
				<div class="contact-col">
					<address class="text-white h5">
						Mid-Atlantic Propane Exchange<br />
						1751 Pulaski Highway<br />
						Havre de Grace, MD 21078<br />
						<abbr title="Phone">P:</abbr> (410) 939-0646<br />
						Directions &nbsp; | &nbsp; Contact
					</address>
				</div>
			</div>
			<div class="col-lg-4 text-center">
				<h3 class="text-warning pb-3">Follow Us:</h3>
				<ul class="list-inline list-unstyled text-white">
					<li class="list-inline-item">
						<i class="fa-brands fa-facebook-square fa-3x"></i>
					</li>
					<li class="list-inline-item">
						<i class="fa-brands fa-linkedin fa-3x"></i>
					</li>
					<li class="list-inline-item">
						<i class="fa-brands fa-twitter-square fa-3x"></i>
					</li>
				</ul>
			</div>
		</div>
		<div class="sub-footer pb-2">
			<p class="text-white text-center"><small>Copyright &copy; <?php echo date('Y'); ?> Mid-Atlantic Propane Exchange</small></p>
			<p class="text-white text-center"><small>Privacy Policy</small></p>
		</div>
	</div>
</footer>
<!-- end footer -->
<!-- begin search modal -->
<?php echo get_template_part('parts/page', 'search-modal'); ?>
<!-- end search modal -->
<!-- begin scripts -->
<?php wp_footer(); ?>
<!-- end scripts -->
</body>
</html>
