<?php
/**
 * Template Name: LODGES
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domaine_rampale
 */

get_header();
?>

	<div id="primary" class="content-area home">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<section class="page_header " style="background-image: url(<?php the_field( 'header_image')?>)">
					<div class="text-center">
						<?php if( get_field('header_title') ): ?>
							<h1><?php the_field( 'header_title')?></h1>
						<?php endif; ?>
						<?php if( get_field('header_subtitle') ): ?>
							<h2><?php the_field( 'header_subtitle')?></h2>
						<?php endif; ?>
					</div>
				</section>

				 

				<!--Section One -->
				<section class="section-2 col-md-12 pt-5 mt-3 sec-blocks">
					<div class="text-center">
						<div class="col-md-7 mx-auto mb-5 pb-3">
							<?php if( get_field('section2_title') ): ?>
								<h2 class="text-center"><?php the_field( 'section2_title')?></h2>
							<?php endif; ?>
							 
						</div>

						<div class="row">
							<?php
									// vars
								$section2_block1 = get_field(section2_block1);
								if( $section2_block1 ): ?>
								<div class="col-md-12 no-gutters over_block" style="background: url('<?php echo $section2_block1['section2_block1_image']?>')"> 
																			 
									<?php if( $section2_block1['section2_block1_title'] ): ?>
										 <h5><?php echo $section2_block1['section2_block1_title']?></h5>
									<?php endif; ?>

									<?php if( $section2_block1['section2_block1_text'] ): ?>
										 <p><?php echo $section2_block1['section2_block1_text']?></p>
									<?php endif; ?>

									<?php if( $section2_block1['section2_block1_url'] ): ?>
										 <a href="<?php echo $section2_block1['section2_block1_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
									<?php endif; ?>
											 
									 
								</div>
							<?php endif; ?>

							<?php
									// vars
								$section2_block2 = get_field(section2_block2);
								if( $section2_block2 ): ?>
								<div class="col-md-12 no-gutters over_block" style="background: url('<?php echo $section2_block2['section2_block2_image']?>')"> 
																			 
									<?php if( $section2_block2['section2_block2_title'] ): ?>
										 <h5><?php echo $section2_block2['section2_block2_title']?></h5>
									<?php endif; ?>

									<?php if( $section2_block2['section2_block2_text'] ): ?>
										 <p><?php echo $section2_block2['section2_block2_text']?></p>
									<?php endif; ?>

									<?php if( $section2_block2['section2_block2_url'] ): ?>
										 <a href="<?php echo $section2_block2['section2_block2_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
									<?php endif; ?>
											 
									 
								</div>
							<?php endif; ?>
							 
 
						</div>
					</div>					
				</section>
				<!--Section Two End-->
				 
				 


			</article>

		<?php endwhile; // End of the loop.
		?>

		 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
