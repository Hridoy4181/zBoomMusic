<?php get_header(); ?>

<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">

							<!-- for displaying the 404 error when someone inputs a wrong link -->

							<h1>404 PAGE NOT FOUND</h1>
							<h2>Maybe you are looking for something else.</h2>

							You may visit the <a href="<?php esc_url( bloginfo( 'home' ) ); ?>">Homepage</a> here.

						</div>
					</div>
				<div class="col-1-3">
					<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
