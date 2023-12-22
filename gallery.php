<?php
/*
Template Name: Gallery
*/
get_header();
?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
	<!-- here we have to declare the post_type name from which posts it is coming (the post name is declared in functions.php) -->
	<?php
		$zboomgalleryitems = new WP_Query(
			array(
				'post_type' => 'zboomgallery',
				'posts_per_page' => -1,
			)
		)
		?>


		<div class="row block03">
		<!-- repeating the same posts again and again with while loop(below post) -->
		<?php
		while ( $zboomgalleryitems->have_posts() ) :
			$zboomgalleryitems->the_post();
			?>

			<div class="col-1-4">
				<div class="wrap-col">
					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</article>
				</div>
			</div>
		<?php endwhile; ?>

		</div>



	</div>
</section>

<?php get_footer(); ?>
