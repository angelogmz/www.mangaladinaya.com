<?php get_header(); ?>
	</div>
	
	<div id="cat-page-holder" class="full-width">
	<main role="main">
	<div class="full-width">
	<h1 class="cat-page-title"><?php /* _e( 'Categories for ', 'html5blank' ); */ single_cat_title(); ?>
	
	
	
	
	
	
	
	
	
	
	
	</h1>
		<!-- section -->
		<div id="cat-main-holder" class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 no-x-padding">
		<div class="center-text col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 no-x-padding"><?php echo category_description(); ?></div>
		<section>
			
			<?php
			$cat = get_category( get_query_var( 'cat' ) );
			$cat_id = $cat->cat_ID;
			$cat_name = $cat->name;
			$cat_slug = $cat->slug;
			?>

			
			
			
			<div class="search-form-holder col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
			<form id="cat-search-form">
			
			
			<label>Search from :</label>
			<select id="cat-search-loc">
			<?php
				echo do_shortcode( "[categorytags cat='$cat_slug'/]" );
			?>
			</select>
			<input  id="cat-filter-submit" type="submit" value="Filter">
			
			</form>
			</div>

			<div class="posts-loop-wrapper">
			<?php get_template_part('loop'); ?>
			</div>

			<div id="pagination">
			<div id="pagination-inner">
			<?php html5wp_pagination(); // Pagination links (inside Functions.php) ?>
			</div>

		</section>
		<!-- /section -->
		</div>
	</main>
	</div>


<?php get_footer(); ?>
