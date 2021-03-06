<?php get_header(); ?>
	<div class="container">
		<div class="alert alert-primary mt-3 shadow">
			<h4 class="text-uppercase text-center pt-2">
				<?php printf( __( 'Search Results for: "%s"', 'mape-theme' ), get_search_query() ); ?>

			</h4>
		</div>
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-12 mb-4">
					<section>
						<h1 class="tag-link mb-5 text-uppercase">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
									
							</a>
						</h1>
						<?php the_excerp(); ?>

						<hr>
					</section>
				</div>
			<?php endwhile; else : ?>
		</div>
			<div class="alert alert-primary text-center fw-bold shadow">
				<?php esc_html_e( 'Sorry, we could not find what you were searching for, please try again.' ); ?>
				<?php endif; ?>	
			</div>
		</div>
		<div class="col">
			<?php echo mape_pagination(); ?>
				
		</div>
	</div>
<?php get_footer(); ?>