<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Casper
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="True"/>
	<meta name="MobileOptimized" content="320"/>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" role="banner" class="site-head site-header"
        <?php if ( get_header_image() ) : ?>style="background-image: url(<?php esc_url( header_image() ); ?>);"<?php endif ?>>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div>
			<h1 class="menu-toggle">
				<a class="icon-bars" href="#">
					<span class="hidden"><?php _e( 'Menu', 'casper' ); ?></span>
				</a>
			</h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'casper' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
	</nav><!-- #site-navigation -->

	<div class="site-head-content inner">
		<div class="give-header-icon-left">
			<a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'> <img
						src="<?php echo get_stylesheet_directory_uri(); ?>/img/give-icon-full-circle.svg" class="give-icon-svg"/></a>
		</div>
		<div class="give-header-content">
			<h1 class="blog-title"><a class="blog-title" href='<?php echo esc_url( home_url( '/' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="blog-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
	</div>

	<div class="give-category-list-wrap">
	<div class="give-category-list-inner inner">
		<span class="give-category-intro">Categories:</span>
		<ul class="give-category-list-ul">
			<?php
			$args = array(
				'title_li' => '',
			);
			wp_list_categories( $args ); ?>
		</ul>
	</div>
	</div>

</header><!-- #masthead -->

<main id="content" class="content" role="main">
