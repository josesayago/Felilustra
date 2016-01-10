<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package felilustra
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Jose SAYAGO">
	<?php if (is_front_page()) { ?>
	<meta name="description" content="<?php echo __('Illustrator and graphic designer, I like to narrate and tell stories through illustration.', 'felilustra'); ?>" />
	<?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'felilustra' ); ?></a>

	<?php if (!is_front_page()) { ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo bloginfo('url'); ?>" alt="<?php echo __('Feliza Gómez - Home', 'felilustra'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feliza_gomez_home.png" alt="<?php echo __('Go to Homepage', 'felilustra'); ?>" /></a>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'felilustra' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<?php } ?>
	<?php
		// Check if page is set as blog
		function is_blog () {
			global  $post;
			$posttype = get_post_type($post);
			return (((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ($posttype == 'post')) ? true : false ;
		}
		// Custom page background from featured image
		if (is_blog()) {
			$id = get_option('page_for_posts');
		} else {
			$id = get_the_ID();
		}
		$image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');
	?>
	<div id="content" class="site-content" <?php if (!is_front_page() && !empty($image)) { echo "style='background-image: url(\"".$image['0']."\");'"; } ?>>
