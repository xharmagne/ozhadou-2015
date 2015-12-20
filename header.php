<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
    </script>

		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/foundation.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/lib/motion-ui.min.js"></script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header and navigation -->
		<header>
			<nav class="main-nav" role="navigation">
				<div class="title-bar" data-responsive-toggle="main-menu-container" data-hide-for="medium">
				  <div class="title-bar-title">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" alt="OzHadou" class="logo-img">
						</a>
					</div>
					<button class="menu-icon hamburger-icon" type="button" data-toggle></button>
				</div>

				<div class="top-bar" id="main-menu-container">
				  <div class="top-bar-left">
						<div class="logo  show-for-medium">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="OzHadou" class="logo-img">
							</a>
						</div>

				      <?php html5blank_nav(); ?>

				  </div>
					<div class="top-bar-right">
				    	<?php get_template_part('searchform'); ?>
				  </div>
				</div>
				<div style="display:none">
					<input type="search" placeholder="Search">
				</div>
			</nav>
		</header>

		<!-- content wrapper -->
		<div class="content-container row medium-9 large-7 columns">
