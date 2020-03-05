<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domaine_rampale
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
				<header class="entry-header">
					<?php
					if ( is_singular() ) :?>
						
					<?php else :?>
						
							<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
						
					<?php endif;

					if ( 'post' === get_post_type() ) :
						?>
						
						<div class="entry-meta">
							<?php
							domaine_rampale_posted_on();
							domaine_rampale_posted_by();
							?>
						</div><!-- .entry-meta -->
					 
					<?php endif; ?>
				</header>
			 
	
	

		<?php domaine_rampale_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'domaine_rampale' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'domaine_rampale' ),
				'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->

		<?php /*<footer class="entry-footer">
			<?php domaine_rampale_entry_footer(); ?>
		</footer>*/?><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->
