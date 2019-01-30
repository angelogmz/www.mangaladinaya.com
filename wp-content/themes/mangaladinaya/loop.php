<?php if (have_posts()): while (have_posts()) : the_post();

$pId = get_the_ID();

?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" class="post-in-item col-lg-6 col-md-6 col-sm-4 col-xs-12">

		<div class="post-inner">
		
		<div class="post-list-thumb col-lg-6 col-md-6 col-sm-12 col-xs-12 no-x-padding">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('medium'); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		</div>
		
		<div class="item-holder col-lg-6 col-md-6 col-sm-12 col-xs-12 no-x-padding">
		<div class="item-heading">
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		
		</div>
		<div class="post-location"><?php the_tags( '<span>', ', ', '</span>' ); ?> </div>
		<div class="s-desc">
		<?php html5wp_excerpt('html5wp_index'); ?>
		
		</div>
		<a class="list-view-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">View details</a>
		</div>
		
		
		<!-- /post thumbnail -->
		<?php //html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		<?php /* edit_post_link(); */ ?>
		</div>



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
