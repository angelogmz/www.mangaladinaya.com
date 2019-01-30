			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

		<script defer src='<?php echo get_template_directory_uri(); ?>/js/lib/conditionizr-4.3.0.min.js?ver=4.9.8'></script>
		<script defer src='<?php echo get_template_directory_uri(); ?>/js/lib/modernizr-2.7.1.min.js?ver=4.9.8'></script>


		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script defer src="https://unpkg.com/jquery-aniview@1.0.1/dist/jquery.aniview.js"
		integrity="sha384-zDA6q/t525x7f6KD/OaOe24vCxSPU3eraILc2NU+ZA7ISsc3ExQbj8PB56FRMq6H"
		crossorigin="anonymous"></script>

		<script defer src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js?ver=4.9.8'></script>
		<script defer src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js?ver=4.9.8'></script>
		<script defer src='<?php echo get_template_directory_uri(); ?>/js/scripts.js'></script>

		<script defer>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
		assets: '<?php echo get_template_directory_uri(); ?>',
		tests: {}
		});
		</script>

	</body>
</html>
