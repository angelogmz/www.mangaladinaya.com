<?php get_header();

	$category = get_the_category();
	$firstCategory = $category[0]->cat_name;
	$firstCategory = strtolower($firstCategory);

	$category_parent_id = $category[0]->category_parent;
	if ( $category_parent_id != 0 ) {
	$category_parent = get_term( $category_parent_id, 'category' );
	$css_slug = $category_parent->slug;
	} else {
	$css_slug = $category[0]->slug;
	}
	
	
?>
	<div class="cat-single-item template-<?php echo $css_slug;?> <?php echo $firstCategory;?> col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="single-top col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
			
			<?php if($firstCategory == 'blog'): ?>
			<div class="single-image col-lg-3 col-md-12 col-sm-12 col-xs-12">

			<?php $pageBanner = get_sub_field('desktop_banner'); ?>
			<?php if ($pageBanner):?>
			<picture>
				<source media="(max-width: 990px)" srcset="<?php echo get_field('mobile_banner'); ?> ">	
				<source media="(min-width: 991px)" srcset="<?php echo get_field('desktop_banner'); ?>">
				<img src="<?php echo get_sub_field('desktop_banner'); ?>" alt="<?php the_title(); ?>">
			</picture>
			<?php else: ?>
				<?php the_post_thumbnail('full'); // Fullsize image for the single post ?>
			<?php  endif; ?>
			
			</div>
			
			<?php else:?>

			<div class="single-image not-blog col-lg-4 col-md-6 col-sm-6 col-xs-12">
			
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
					<?php the_post_thumbnail('full'); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
			</div>
			
			<?php endif; ?>
			
			<?php if($firstCategory == 'blog'): ?>

			<div class="short-desc col-lg-9 col-md-12 col-sm-12 col-xs-12">
			<h1 class="posts-page-title"><?php the_title(); ?></h1>
			
			<?php else:?>
			
			<div class="short-desc col-lg-8 col-md-6 col-sm-6 col-xs-12">
			<!-- post title -->
			<h1><?php the_title(); ?></h1>
			<!-- /post title -->
			<?php
				$post_tags = get_the_tags($post->ID);
				if ( $post_tags ) {
					foreach( $post_tags as $tag ) {
						echo '<span class="loc-tag">' . $tag->name . "</span>\n";
					}
				}
			?>		
			<?php endif; ?>

			<?php the_content(); // Dynamic Content ?>
			</div>
			</div>
			
			
			<div class="single-gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
			
			<?php if(have_rows('gallery')): ?> 
				<?php while(have_rows('gallery')) : the_row(); ?>
				
				<div class="gallery-item col-lg-2 col-md-2 col-sm-3 col-xs-6">  
				<?php 

				$image = get_sub_field('image');
				$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
				$image_array = wp_get_attachment_image_src($image, 'full');
				$image_url = $image_array[0];
				if( $image ) { 
				?>
				<a data-fancybox="gallery" href="<?php echo $image_url; ?>">
				<?php echo wp_get_attachment_image( $image, $size ); ?>
				</a>
				<?php } ?>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
	
			</div>
			
			<?php if($firstCategory != 'blog'){ ?>
			<div class="single-contact col-lg-12 col-md-12 col-sm-12 col-xs-12">
			

			
				<div class="single-contact-desc col-lg-7 col-md-6 col-sm-12 col-xs-12">
					<?php echo get_field('main_description');?>
				</div>
				
				
				<div class="form-block col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<?php
						$enqFormCode = get_field('contact_form_code', 'options');
						if($enqFormCode){
							echo do_shortcode($enqFormCode);
						}
					?>
				</div>
			</div>
			<?php } ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->


	<section>
	<div class="related-blog-posts">
			<?php
			$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
			if( $related ) foreach( $related as $post ) {
			setup_postdata($post); ?>
				<div class="col-lg-4 col-xs-12 rel-list-item">
				<div class="rel-list-inner-wrap">
						<div class="col-lg-4">
							<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
									<?php the_post_thumbnail('full'); // Fullsize image for the single post ?>
								</a>
							<?php endif; ?>
						</div>
						<div class="col-lg-8">
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						</div>				
				</div>

				</div>
				
			<?php }
			wp_reset_postdata(); ?>
	</div>
	</section>



	</main>
	</div>


<?php get_footer(); ?>
