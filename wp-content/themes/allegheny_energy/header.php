<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EAGP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title>
	<?php
		bloginfo('name');
		echo ' &mdash;';

		if (is_front_page())
			echo ' Home';
		else
			wp_title('');
	?>
	</title>
	<script src="https://use.typekit.net/pzh4ork.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php wp_head(); ?>
	<!--Google Analytics code goes here -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-2436246-14', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body <?php body_class(); ?>>


	<header id="header" class="site-header <?php if (!is_page_template('template-parts/home-page.php')) { echo 'transparent'; } ?>">
			<!--this nav to show on load of page -->
			<nav class="navbar navbar-default navbar-sticky-top navbar-centered" role="navigation" id="logoScroll2">
				<div class="container">
					<div class="row">
						<div class="navbar-header2">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<a class="navbar-brand2 navbar-brand-image visible-xs" href="<?php bloginfo('url')?>" >
								<img src="<?php echo get_template_directory_uri() ?>/images/EnergyAllianceLogo_Pgh_STACKED_WHITE.svg" alt="<?php bloginfo('name') ?>" class="center-block" title="Energy Alliance of Greater Pittsburgh Logo" />
							</a>
						</div>
						
						<?php wp_nav_menu( array( 
												
							'theme_location'   => 'header_menu',					
							'menu_class'       => 'nav navbar-nav2 collapse navbar-collapse navbar-ex1-collapse',
							//'walker'  => new WP_Bootstrap_NavWalker()
							) ); ?>

						<a class="navbar-brand2 hidden-xs" href="<?php bloginfo('url')?>">
								<img src="<?php echo get_template_directory_uri() ?>/images/EnergyAllianceLogo_Pgh_STACKED_WHITE.svg" alt="<?php bloginfo('name') ?>" class="center-block " title="Energy Alliance of Greater Pittsburgh Logo" />
						</a>
						</div>
					</div>
				</div>
			</nav>
			<!--this nav to fade in on scroll -->
			<nav class="navbar navbar-default navbar-fixed-top navbar-bg" role="navigation" id="logoScroll">
				<div class="container">
					<div class="row">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand navbar-brand-image" href="<?php bloginfo('url')?>" >
								<img src="<?php echo get_template_directory_uri() ?>/images/EnergyAllianceLogo_Pgh_STACKED_WHITE.svg" alt="<?php bloginfo('name') ?>" class="center-block" title="Energy Alliance of Greater Pittsburgh Logo" />
							</a>
						</div>		
						<?php wp_nav_menu( array( 
												
							'theme_location'   => 'header_menu',					
							'menu_class'       => 'nav navbar-nav navbar-right collapse navbar-collapse navbar-ex1-collapse',
							) ); ?>		
					</div>
				</div>
			</nav>
		</header>

<!--	<div id="content" class="site-content">-->
