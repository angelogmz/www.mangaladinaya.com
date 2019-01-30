<?php 
/* Template Name: home page */
get_header();
?>
<div id="main-banner" class="home-banner">
<div class="hm-banner-left">
	<span class="site-name">
		Mangaladinaya
	</span>
	<h1 class="hm-banner-h1">All services for your Wedding</h1>
	<div class="banner-text">
	<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	</p>

	</div>
</div>
<div>
    <picture>
        <source media="(max-width: 768px)" srcset="<?php echo the_field( "mobile_banner", 'options' );?>">
        <source media="(min-width: 1101px)" srcset="<?php echo the_field( "desktop_banner", 'options' );?>">
        <img src="<?php echo the_field( "desktop_banner", 'options' );?>" alt="Wedding planing and event planning">
    </picture>
</div>
</div>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>