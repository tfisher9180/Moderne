<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moderne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moderne' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-branding">

				<?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif; ?>

			</div><!-- .site-branding -->

			<div class="site-menu">
				<button class="btn menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'moderne' ); ?></span>
					<svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0.396 -69.572 600 600" role="img"><path d="M600,92.307H0V0h600V92.307z M600,184.616H0v92.309h600V184.616z M600,369.229H0v92.31h600V369.229z"></path></svg>
				</button>
			</div><!-- .site-menu -->

			<div class="site-search">
				<button class="btn search-toggle">
					<svg class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="-11.279 -0.341 600 600" role="img"><path d="M576.648,544.924l-169.39-169.39c32.656-39.691,52.289-90.479,52.289-145.77C459.548,103.072,356.467,0,229.764,0 C103.072,0,0,103.072,0,229.765c0,126.703,103.072,229.784,229.764,229.784c43.289,0,83.818-12.039,118.422-32.937L521.574,600 L576.648,544.924z M77.885,229.765c0-83.746,68.132-151.878,151.879-151.878c83.756,0,151.896,68.132,151.896,151.878 c0,83.755-68.14,151.894-151.896,151.894C146.017,381.659,77.885,313.52,77.885,229.765z"></path></svg>
				</button>
				<?php get_search_form(); ?>
			</div><!-- .site-search -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
