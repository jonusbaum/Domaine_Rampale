<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Domaine_rampale
 */

?>

	</div><!-- #content -->

	<div class="footer_widget py-5">
		<div class="col-md-11 pt-3 mx-auto">
			<div class="row">
				<?php if (  is_active_sidebar( 'sidebar-2' ) ) {?>
				<div class="col-md image-widget"> 
					 <?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<?php }?>

				<?php if (  is_active_sidebar( 'sidebar-3' ) ) {?>
				<div class="col-md pl-md-5"> 
					 <?php dynamic_sidebar( 'sidebar-3' ); ?>
				</div>
				<?php }?>

				<?php if (  is_active_sidebar( 'sidebar-4' ) ) {?>
				<div class="col-md"> 
					 <?php dynamic_sidebar( 'sidebar-4' ); ?>
				</div>
				<?php }?>

				<?php if (  is_active_sidebar( 'sidebar-5' ) ) {?>
				<div class="col-md"> 
					 <?php dynamic_sidebar( 'sidebar-5' ); ?>
				</div>
				<?php }?>
				 
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			 <?php if (  is_active_sidebar( 'sidebar-6' ) ) {?>
				  
					 <?php dynamic_sidebar( 'sidebar-6' ); ?>
				 
				<?php }?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
