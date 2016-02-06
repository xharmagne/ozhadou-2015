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
				<div class="title-bar" data-responsive-toggle="main-menu-container" data-hide-for="semilarge">
				  <div class="title-bar-title">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-small.png" alt="OzHadou" class="logo-img">
						</a>
					</div>
					<button class="menu-icon hamburger-icon" type="button" data-toggle></button>
				</div>

				<div class="top-bar  stacked-for-medium" id="main-menu-container">
				  <div class="top-bar-left">
						<div class="logo  show-for-semilarge">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="OzHadou" class="logo-img">
							</a>
						</div>

				      <?php html5blank_nav(); ?>

				  </div>
					<div class="top-bar-right">
						<div class="social-icons">

							<a class="social-icon" href="https://www.facebook.com/ozhadou" target="_blank">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path d="M16,0C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16s16-7.2,16-16C32,7.2,24.8,0,16,0z M20.2,10.7l-1.5,0
									c-1.2,0-1.4,0.6-1.4,1.4v1.8h2.8l-0.4,2.8h-2.4V24h-2.9v-7.3h-2.5v-2.8h2.5v-2.1C14.3,9.3,15.8,8,18,8c1,0,1.9,0.1,2.2,0.1V10.7z"/>
								</svg>

							</a>
							<a class="social-icon" href="https://www.twitter.com/ozhadou" target="_blank">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path d="M16,0C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16s16-7.2,16-16C32,7.2,24.8,0,16,0z M22.4,12.7c0,0.1,0,0.3,0,0.4
									c0,4.3-3.3,9.3-9.3,9.3c-1.9,0-3.6-0.5-5-1.5c0.3,0,0.5,0,0.8,0c1.5,0,3-0.5,4.1-1.4c-1.4,0-2.6-1-3.1-2.3c0.2,0,0.4,0.1,0.6,0.1
									c0.3,0,0.6,0,0.9-0.1c-1.5-0.3-2.6-1.6-2.6-3.2c0,0,0,0,0,0c0.4,0.2,0.9,0.4,1.5,0.4c-0.9-0.6-1.5-1.6-1.5-2.7
									c0-0.6,0.2-1.2,0.4-1.7c1.6,2,4,3.3,6.8,3.4c-0.1-0.2-0.1-0.5-0.1-0.7c0-1.8,1.5-3.3,3.3-3.3c0.9,0,1.8,0.4,2.4,1
									c0.7-0.1,1.5-0.4,2.1-0.8c-0.2,0.8-0.8,1.4-1.4,1.8c0.7-0.1,1.3-0.3,1.9-0.5C23.6,11.7,23,12.3,22.4,12.7z"/>
								</svg>
							</a>
							<a class="social-icon" href="https://www.youtube.com/ozhadou" target="_blank">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path d="M16,0C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16s16-7.2,16-16C32,7.2,24.8,0,16,0z M24,16.6
									c0,1.3-0.2,2.6-0.2,2.6s-0.2,1.1-0.6,1.6c-0.6,0.6-1.3,0.6-1.6,0.7c-2.2,0.2-5.6,0.2-5.6,0.2s-4.2,0-5.4-0.2c-0.4-0.1-1.2,0-1.8-0.7
									c-0.5-0.5-0.6-1.6-0.6-1.6S8,17.9,8,16.6v-1.2c0-1.3,0.2-2.6,0.2-2.6s0.2-1.1,0.6-1.6c0.6-0.6,1.3-0.6,1.6-0.7
									c2.2-0.2,5.6-0.2,5.6-0.2h0c0,0,3.4,0,5.6,0.2c0.3,0,1,0,1.6,0.7c0.5,0.5,0.6,1.6,0.6,1.6s0.2,1.3,0.2,2.6V16.6z"/>
								<polygon points="14.3,18.1 18.7,15.8 14.3,13.6 "/>
								</svg>

							</a>
						</div>

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
