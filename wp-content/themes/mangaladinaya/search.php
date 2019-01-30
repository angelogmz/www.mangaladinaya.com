<?php get_header(); ?>
<div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
	<main role="main">
		<!-- section -->
		<section>

			<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>
</div>

<?php get_footer(); ?>
