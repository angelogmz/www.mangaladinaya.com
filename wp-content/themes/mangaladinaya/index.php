<?php get_header(); ?>
<div id="main-banner" class="home-banner">
<div class="banner-l-txt hidden-xs hidden-sm">Mangaladinaya</div>
<div id="home-banner-inner" class="parallax-window col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="banner-img">

    <picture>
        <source media="(max-width: 768px)" srcset="<?php echo the_field( "mobile_banner", 'options' );?>">
        <source media="(min-width: 1101px)" srcset="<?php echo the_field( "desktop_banner", 'options' );?>">
        <img src="<?php echo the_field( "desktop_banner", 'options' );?>" alt="Wedding planing and event planning">
    </picture>
	
</div>
</div>

</div>

<div class="container-fluid home no-x-padding">

<div id="main-container">
	
<div id="intro" class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12 no-x-padding">
<?php echo the_field( "welcome_content", 'options' );?>
</div>

<div class="container-fluid">

	<section id="home-essentials">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<h2 class="center">Wedding services</h2
	>
	</div>
	<div id="home-essen-holder">
		
		<div id="home-essen-inner" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		<div  class="owl-carousel col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		
		<?php if(have_rows('essentials_block', 'options')):
		while(have_rows('essentials_block', 'options')) : the_row(); ?>
		<div class="ess-parent no-x-padding">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		<a class="item-link" href="<?php echo get_sub_field('page_link'); ?>">
		<div class="ess-inner">
		<div class="img-holder">
		<span class="overlay"></span>
		<img class="ess-img trans" src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('alt_text'); ?>" />
		</div>
		<div class="item-title"><h2><?php echo get_sub_field('title'); ?></h2></div>
		</div>
		</a>
		</div>
		</div>
		
		<?php
		endwhile;
		endif;
		wp_reset_postdata();
		?>	
		</div>
		</div>
	</div>
	</section>
	
	<section id="recent-partners">
		<div class="col-lg-12 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 no-x-padding">
		<h2>Recent Partners</h2>
		<div class="full-width partners-parent">
		
			<?php $catquery = new WP_Query( 'cat=-9&posts_per_page=8' ); ?>
			
			<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
			<div class="recent-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
			<div class="recent-inner">
			<?php
			$post_id = get_the_ID(); // or use the post id if you already have it
			$category_object = get_the_category($post_id);
			$category_name = $category_object[0]->name;
			$category_slug = $category_object[0]->slug;
			$postTitle = get_the_title();
			$postTitle = (strlen($postTitle) > 25) ? substr($postTitle,0,25).'...' : $postTitle;
			?>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php echo $postTitle; ?></a></h3>
			<div class="rec-thumb col-lg-12 col-sm-12 col-xs-12">
			<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
			<div class="rec-cat"><a href="/<?php echo $category_slug; ?>"><span>View more  in :</span> <?php echo $category_name; ?></a></div>
			</div>
			</div>
			</div>
			<?php endwhile; ?> 
			
			<?php wp_reset_postdata(); ?>
		
		</div>
	</section>	
	
	<section id="professionals">
	<h2>Wedding professionals</h2>
	<div id="top-feat-parent" class="full-width">
	<div id="top-feat-holder" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 no-x-padding">
	<div id="top-feat" class="owl-carousel-2">
		<?php if(have_rows('featured_advice', 'options')):
		while(have_rows('featured_advice', 'options')) : the_row(); ?>
		<div class="feat-cont col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		<div class="feat-cont-img col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		<img src="<?php echo get_sub_field('image'); ?>" alt="<?php echo get_sub_field('alt_text'); ?>" />
		</div>
		<div class="item-cont col-lg-12 col-md-12 col-sm-12 col-xs-12"><?php echo get_sub_field('content'); ?></div>

		</div>
		<?php
		endwhile;
		endif;
		wp_reset_postdata();
		?>	
	
	</div>
	</div>
	</div>
	</section>	

	<section id="blog-row">
	<div id="blog-hloder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<h2>Blog Articles</h2>
	<div id="blog-hloder" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		<?php
		query_posts('posts_per_page=4&cat=9'); /*1, 2*/
		if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="blog-block <?php echo $post->ID;?> col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="blog-block-inner col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
		<div class="blog-thumb">
		<?php the_post_thumbnail(); ?>
		</div>
		<div class="blog-exc">
		
		<div class="blog-title">
		<h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title();?></a></h3>
		
		<a class="blog-read" href="<?php the_permalink(); ?>">Read article <span class="more-icon">&rsaquo;</span></a>
		</div>
		<div class="blog-exc-inner">
		<?php html5wp_excerpt('html5wp_index'); ?>
		</div>
		</div>
		
		</div>
		</div>
		<?php endwhile; ?>
		<?php wp_reset_query(); /*4*/ ?>
	<div class="blog-link col-lg-12 col-md-12 col-sm-12 col-xs-12 no-x-padding">
	<a class="blog-link-txt" href="http://mangaladinaya.com/blog/">view more</a>
	</div>
	</div>
	</div>
	</section>
	</div>
	</div>
</div>

<?php get_footer(); ?>