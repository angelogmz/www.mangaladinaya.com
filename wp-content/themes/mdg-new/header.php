<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
        WebFont.load({
            google: {
            families: ['Montserrat:100,300,400']
            }
        });
		</script>

	</head>
	<body <?php body_class(); ?>>



			<!-- header -->
			<header class="header clear" role="banner">

					<div class="header-inner col-lg-10 offset-lg-1 col-md-12 offset-md-0">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>

							<div class="header-menu-btn">
								<button class="menu-btn" type="button" class="right navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
										<span class="menu-btn-title">Menu</span>
										<span class="menu-icon left">
											<span class="icon-bar top"></span>
											<span class="icon-bar mid"></span>
											<span class="icon-bar bottom"></span>
										</span>
								</button>
							</div>

						</div>
						<!-- /logo -->

						<div class="main-menu">
							<!-- nav -->
							<nav class="nav" role="navigation">
								<?php html5blank_nav(); ?>
							</nav>
							<!-- /nav -->
						</div>

						<div class="search-smo">
							<div class="sm-links">
								<a href="https://www.facebook.com/yohantile/" class="" target="_blank"><i class="fab fa-facebook-f" target="_blank" ></i></a>
							</div>
							<div class="header-contact"><a href="tel:0094775889134"><span>Call us : </span> 077 588 9134</a></div>
							<div class="header-search">
							<div class="search-switch">Search <i class="fas fa-search"></i></div>
							<div class="search-form-holder">

								<div class="sfh-inner">
									<?php get_template_part('searchform'); ?>
									<div class="search-close-btn">Close <span class="close-cr"></span></div>
								</div>
							</div>
							</div>
						</div>

					</div>

		
			
			</div>
			</header>
			<!-- /header -->
