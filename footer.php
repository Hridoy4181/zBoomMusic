<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">


<?php dynamic_sidebar( 'footer-widget' ); ?>


		</div>
		
		<div class="row copyright">
			<!-- making footer text dynamically change from the zboom options (footer options) -->
			<p>
			<?php
				global $zboom;

				echo $zboom['copyright-text'];
			?>
			</p>

		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body></html>
