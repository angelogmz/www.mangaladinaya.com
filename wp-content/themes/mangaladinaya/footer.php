
			</div>
			<!-- /container -->
			
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div id="footer-top" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				GIRUWA Web Solutions<br>
				15/1<br>
				1st Lane,<br>
				Wanatha Rd, Gangodawila<br>
				Nugegoda.
				</div>
				<div id="news-form"class="center-text col-lg-3 col-md-3 col-sm-4 col-xs-12">
				Get in touch
				<?php /*echo do_shortcode( '[contact-form-7 id="217" title="Newsletter"]' );*/ ?>
				<div class="smo-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a class="sm-link" href="https://www.facebook.com/mangaladinaya/" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a class="sm-link" href="https://www.instagram.com/mangaladinaya/" target="_blank"><i class="fab fa-instagram"></i></a>
				</div>
				</div>
				</div>
				<div id="copyright-parent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
				<!-- copyright -->
				<div class="copyright">					
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
					<span class="alignright"><a href="mailto:info@mangaladinaya.com">info@mangaladinaya.com</a></span>
				</div>
				</div>
				</div>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		
		
		
		<?php wp_footer(); ?>
	
	<script>
	function initMap() {
	var uluru = {lat: 6.9218374, lng: 79.8211859};
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 16,
	center: uluru
	});
	var marker = new google.maps.Marker({
	position: uluru,
	map: map
	});
	}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQ6vZLibmjwBKvzhMJMIzvNCH1SNRlsEE&callback=initMap">
	</script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	</body>
</html>
