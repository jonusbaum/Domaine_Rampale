<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domaine_rampale
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page_header " style="background-image: url(<?php if( get_field('header_image') ) { 
					the_field( 'header_image'); 
				} else { 
					echo get_template_directory_uri().'/images/DR_blog_COVER.jpg';
				}?>)">
			<div class="text-center">
				 <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				 
			</div>
		</header>
	 
		<div class="container mt-5">
	<?php domaine_rampale_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'domaine_rampale' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'domaine_rampale' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
