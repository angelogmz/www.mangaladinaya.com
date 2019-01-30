<?php get_header();

/* Template Name: Services Page */
?>
<div class="page-content col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<main role="main">
		<!-- section -->
		<section>

		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<div id="post-<?php the_ID(); ?>" <?php post_class('flex-box-set-holder'); ?>>

				

				<?php

					$categories = get_categories( array(
					'orderby' => 'name',
					'order'   => 'ASC',
					'exclude' =>array(9)
					) );

					foreach( $categories as $category ) {
					
					
					$category_link = sprintf( 
						'<a href="%1$s" class="cat-heading" alt="%2$s">%3$s</a>',
						esc_url( get_category_link( $category->term_id ) ),
						esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
						esc_html( $category->name )
					);
					
					
					$image = get_field('thumbnail', $category); 
					
					echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="cat-thumb-inner">
					<img src="'.$image .'" alt="'. $category->name .'" />
					<h2 class="smaller-header">' . sprintf( $category_link ) . '</h2>';
										
					echo '</div></div>';
					} 		
				?>
				
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

		</section>
		<!-- /section -->
		
		
	</main>
</div>

<?php get_footer(); ?>
