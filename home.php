<?php get_header(); ?>
<section class="int-page-header pt-5 pb-5">
	<?php the_title( '<h1 class="text-center text-white int--page--title">', '</h1>' ); ?>
		
</section>
<div class="container">
	<div class="row mt-5">
		<div class="col-md-9 mb-4">
			<section>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
								
						</a>
					</h2>
					<small><em>Posted on: <?php echo get_the_date(); ?></em></small>
					<?php the_excerpt(); ?>
					<hr>
					<?php endwhile; else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
			</section>
		</div>
	</div>
	<div class="col text-center">
		<?php echo mape_pagination(); ?>
			
	</div>
</div>
<?php get_footer(); ?>
