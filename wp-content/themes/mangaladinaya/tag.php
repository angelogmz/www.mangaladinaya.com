<?php get_header(); ?>
	<div id="cat-main-holder" class="page-content col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Searched in : ', 'html5blank' ); echo single_tag_title('', false); ?></h1>

			<?php get_template_part('loop'); ?>


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	</div>
	

<?php get_footer(); ?>
