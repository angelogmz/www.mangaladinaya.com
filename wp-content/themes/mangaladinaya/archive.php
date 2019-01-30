
<?php get_header(); ?>
	<div id="cat-main-holder" class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<main role="main">
			<main role="main">
		<!-- section -->
		<section>

		<h1 class="cat-page-title"><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
	</main>
	</div>
	

<?php get_footer(); ?>
