<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Domaine_rampale
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'domaine_rampale' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="col-md-11 mx-auto"> 
			<div class="row  align-items-center ">
				<div class="col-md-4">
					<div id="menu_slide" class="menu_slide">
						<div  class="menu_slide_inner">
							<ul class="menu_left">
								<li><a href="javascript:void(0)" class="menu-close" >&times;</a> </li>
								<li><?php dynamic_sidebar( 'sidebar-8' ); ?></li>
								<?php /*<li><a href="#"><img class="filter-white" src="<?php echo get_template_directory_uri()?>/images/06-facebook.svg" alt="facebook"></a></li>
								<li><a href="#"><img class="filter-white" src="<?php echo get_template_directory_uri()?>/images/38-instagram.svg" alt="facebook"></a></li>*/?>
							</ul>
							<nav id="site-navigation" class="main-navigation">
								
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
							</nav><!-- #site-navigation -->
						</div>
					</div>
					<ul class="menu_left">
						<li><a href="javascript:void(0)" class="menu-toggle"><img   src="<?php echo get_template_directory_uri()?>/images/open-menu.svg" alt="facebook"></a> </li>
						<li><?php dynamic_sidebar( 'sidebar-8' ); ?></li>
						<?php /*<li><a href="#"><img class="filter-white" src="<?php echo get_template_directory_uri()?>/images/06-facebook.svg" alt="facebook"></a></li>
						<li><a href="#"><img class="filter-white" src="<?php echo get_template_directory_uri()?>/images/38-instagram.svg" alt="facebook"></a></li>*/?>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="site-branding text-center">
						<?php
						the_custom_logo();
						 ?>
					</div><!-- .site-branding -->
				</div>
				<div class="col-md-4 text-right">
					 <?php echo do_action('wpml_add_language_selector')?> 
					 <?php dynamic_sidebar( 'sidebar-7' ); ?>
					<?php /*<a href="#" class="reserve-btn"><?php esc_html_e('RÉSERVER','domaine_rampale')?></a>*/?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
