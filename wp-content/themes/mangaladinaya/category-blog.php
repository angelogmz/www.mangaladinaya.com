<?php get_header(); ?>
	<div class="page-content col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<main role="main">

	<h1 class="cat-page-title"><?php /* _e( 'Categories for ', 'html5blank' ); */ single_cat_title(); ?></h1>
		<!-- section -->
		<section>
			<div class="col-lg-12 no-x-padding">
				<?php echo category_description( $category_id ); ?> 
			</div>
		</section>
		
		<section>

		<div class="blog-art-holder">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<div id="post-<?php the_ID(); ?>" class="blog-article-block col-lg-6 col-md-6 col-sm-12 col-xs-12">

						<div class="blog-article-inner-holder col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
						<div class="col-lg-12">
						<h3>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h3>
						<div class="col-lg-12 no-x-padding">
							<div class="col-lg-4 blog-list-thumb">
								<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
									</a>
								<?php endif; ?>
							</div>
							<div class="col-lg-8 blog-list-exc">
								<?php the_excerpt(); ?> 
							</div>
						</div>

						
						</div>
						</div>
					</div>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

			<?php endif; ?>

			<div id="pagination">
				<div id="pagination-inner">
					<?php html5wp_pagination(); // Pagination links (inside Functions.php) ?>
				</div>
			</div>
		</div>

		</section>
		<!-- /section -->
	</main>
	</div>

<?php get_footer(); ?>
