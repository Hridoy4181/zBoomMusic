<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">


				<!-- function for displaying the post -->
				<?php
				while ( have_posts() ) :
					the_post();
					?>

					<article>
						<?php the_post_thumbnail(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="info">[By <?php the_author(); ?> on <?php the_time( 'F d, Y' ); ?> with <?php comments_popup_link( 'comment nai', 'akta comment ase', '% comments', 'hridoy', 'comments off' ); ?>]</div>

						<!-- function for displaying time -->
						<?php // the_time( 'd-F-Y | g-i-a' ); ?>
						
						<!-- we can also use capital F for the full name of the month g for hour, i for minute, a and p for am/pm-->
						<!-- <?php // the_time('Y-F-D'); ?> -->

						


						<?php read_more( 30 ); ?>... <a href="<?php the_permalink(); ?>">read more</a>

					</article>

				<?php endwhile; ?>


				<!-- making the pagination dynamic with WP default function.
				we will not write it in the while loop.
				we can write the_posts_navigation too in the function. -->
				<div id="pagi">
				<?php
				the_posts_pagination(
					array(
						'prev_text'          => __( 'prev' ),
						// to show all the pagination numbers but it's better to not use cause there may 100 pages.
						// 'show_all'           => true,
						'next_text'          => __( 'next' ),
						'screen_reader_text' => __( 'Navigation' ),
						// we can add any text to get the text in the pagination like (page) below
						// 'before_page_number' => 'Page',

						// we can also add b tag to get bold numbers of the pagination
						// 'before_page_number' => '<b>',
						// 'after_page_number'  => '</b>',
					)
				);
				?>
				</div>

				</div>
			</div>
			<div class="col-1-3">
					<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
