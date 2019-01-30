<?php /* Template Name: Contact us */ ?>
<?php get_header(); ?>
<div id="page-holder" class="page-content col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12">
	<main role="main">
		<!-- section -->
		<section>
			<div class="single-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="single-contact-desc col-lg-7 col-md-6 col-sm-12 col-xs-12">
					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php the_content(); ?>

							<?php comments_template( '', true ); // Remove if you don't want comments ?>

							<br class="clear">

							<?php edit_post_link(); ?>

						</article>
						<!-- /article -->

					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

						</article>
						<!-- /article -->

					<?php endif; ?>
				</div>
				<div class="form-block col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<?php
						echo do_shortcode('[contact-form-7 id="710" title="Contact Us"]');
					?>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>
</div>

<?php get_footer(); ?>
