<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package searchstack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/smy6mjh.css">
	<link href="/wp-content/themes/searchstack/js/hamburgers.css" rel="stylesheet">
	<link href="/wp-content/themes/searchstack/js/aos-master/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/searchstack/js/slick-1.8.1/slick-1.8.1/slick/slick.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<link href="/wp-content/themes/searchstack/js/lity-2.4.1/dist/lity.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/searchstack/js/slick-1.8.1/slick-1.8.1/slick/slick-theme.css"/>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151901581-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-151901581-1');
	</script>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a href="/recruitment-podcast-ebook/" class="mem-banner w-inline-block">
			<div class="mem-banner-container">
				<div class="mem-banner-image">
					<div class="button-icon is-sm is-banner">
						<img src="/wp-content/uploads/2023/01/icon-play.svg" class="play-icon">
					</div>
				</div>
				<div class="nav-menu_header is-inline">
					<p class="text-size-small text-color-grey hide-tablet">'The Ultimate Guide to starting a recruitment podcast'</p>
				</div>
				<div class="button-secondary_text is-nbanner-button">
					<div>Download now</div>
					<img src="/wp-content/uploads/2023/01/chevron-right.svg" class="chevron">
				</div>
			</div>
		</a>
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
			else :

			endif;
			$searchstack_description = get_bloginfo( 'description', 'display' );
			if ( $searchstack_description || is_customize_preview() ) :
				?>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<span onclick="openNav()" class="header-nav-click">
			<button class="hamburger hamburger--elastic" type="button" style="display: none;">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</span>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		<a href="https://calendly.com/haydn-searchstack/website-meeting" target="_blank" class="book-call-link">
			<button class="book-call-button"><span class="bc-p">Book a call</span>
				<span class="bcb-icon-block"><img src="/wp-content/uploads/2021/05/white-arrow.svg" alt="" class="icon-block"></span>
			</button>
		</a>		
	</header><!-- #masthead -->
	<div id="myNav" class="overlay">

		<!-- Overlay content -->
		<div class="overlay-content">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>


	</div>

	<div id="content" class="site-content">
		<div id="circularcursor"></div>
