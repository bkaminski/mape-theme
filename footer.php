<footer class="mape-footer">
	<div class="container">
		<div class="row pt-5 pb-5">
			<div class="col-md-4 p-3 text-center">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/mid-atlantic-propane-exchange-footer-logo.png" class="img-fluid" alt="Mid-Atlantic Propane Exchange" />
			</div>
			<div class="col-md-4 p-3 text-center">
				<h3 class="text-white">Contact Us:</h3>
			</div>
			<div class="col-md-4 p-3 text-center">
				<h3 class="text-white">Follow Us:</h3>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="text-white text-center">Copyright &copy; <?php echo date('Y'); ?> Mid-Atlantic Propane Exchange</p>
			</div>
		</div>
	</div>
</footer>
<?php echo get_template_part('parts/page', 'search-modal'); ?>
<?php wp_footer(); ?>
</body>
</html>
