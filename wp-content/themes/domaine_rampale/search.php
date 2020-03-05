<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Domaine_rampale
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-5">
				<div class="page_header " style="background-image: url(<?php echo get_template_directory_uri().'/images/DR_blog_COVER.jpg';?>)">
								<div class="text-center">
									<h1 class="page-title">
										<?php
										/* translators: %s: search query. */
										printf( esc_html__( 'Search Results for: %s', 'domaine_rampale' ), '<span>' . get_search_query() . '</span>' );
										?>
									</h1>
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

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					

					?>
					</div>
				    <?php get_sidebar();?>
				</div>
			</div>
		<?php else :

						get_template_part( 'template-parts/content', 'none' );
		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
