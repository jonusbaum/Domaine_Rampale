<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domaine_rampale
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-5">
				<div class="page_header " style="background-image: url(<?php echo get_template_directory_uri().'/images/DR_blog_COVER.jpg';?>)">
								<div class="text-center">
									<?php
									the_archive_title( '<h1 class="page-title">', '</h1>' );
									the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								</div>
						</div>
				 
			</header><!-- .page-header -->
            
            <div class="container">
	            <div class="row">
	            	<div class="col-md-9">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

						?>
					</div>
				    <?php get_sidebar();?>
				</div>
			</div>
		<?php endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
