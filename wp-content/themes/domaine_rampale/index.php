<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domaine_rampale
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		 
		<section class="page_header " style="background-image: url(<?php the_field('header_image', get_option('page_for_posts')); ?>)">
			<div class="text-center">
				 <?php if( get_field('header_tile', get_option('page_for_posts')) ): ?>
					<h1><?php the_field('header_tile', get_option('page_for_posts')); ?></h1>
					<?php endif; ?>
				 <?php if( get_field('header_subtitle', get_option('page_for_posts')) ): ?>
					<h3><?php the_field('header_subtitle', get_option('page_for_posts')); ?></h3>
				 <?php endif; ?>

				 
			</div>
		</section>
		<?php
		if ( have_posts() ) :?>

			 
			<div class="col-md-11 mx-auto  blog_page py-5 mt-5 mb-2">
				
					<?php /* Start the Loop */
					while ( have_posts() ) :
						the_post();?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="row">
								<div class="col-md-4">
									<?php the_post_thumbnail();?>
								</div>
								<div class="col-md-8">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt();?></p>
									<a href="<?php the_permalink() ?>" class="sec-btn btn"><?php esc_html_e('voir plus','domaine_rampale')?> </a>
								
								</div>
							</div>
						</article>
							
					<?php endwhile;?>
				
			</div>
			<?php the_posts_navigation();
 
		endif;
		?>



		<?php /*<section class="section-four col-md-12 sec-blocks">

					<?php if( get_field('section_3_title', get_option('page_for_posts')) ): ?>					 
					<h2 class="text-center"><?php the_field( 'section_3_title', get_option('page_for_posts'));?></h2>
					<?php endif; ?>
					<div class="section4_block_group">
						<div class="col-md-11 mx-auto section4_block_group_inner">
							<div class="row">
								<?php
								// vars
								$section3_block1 = get_field('section3_block_1', get_option('page_for_posts'));
								if( $section3_block1 ): ?>
									<?php if( $section3_block1['block1_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
												<h5><?php echo $section3_block1['block1_title']?></h5>
												
												<?php if( $section3_block1['block1_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section3_block1['block1_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section3_block1['block1_image'] ): ?>
												<img src="<?php echo $section3_block1['block1_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block2 = get_field('section3_block_2', get_option('page_for_posts'));
								if( $section3_block2 ): ?>
									<?php if( $section3_block2['block2_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
												<h5><?php echo $section3_block2['block2_title']?></h5>
												
												<?php if( $section3_block2['block2_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section3_block2['block2_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section3_block2['block2_image'] ): ?>
											<img src="<?php echo $section3_block2['block2_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block3 = get_field('section3_block_3', get_option('page_for_posts'));
								if( $section3_block3 ): ?>
									<?php if( $section3_block3['block3_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section3_block3['block3_title']?></h5>
												
												<?php if( $section3_block3['block3_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section3_block3['block3_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section3_block3['block3_image'] ): ?>
											<img src="<?php echo $section3_block3['block3_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block4 = get_field('section3_block_4', get_option('page_for_posts'));
								if( $section3_block4 ): ?>
									<?php if( $section3_block4['block4_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section3_block4['block4_title']?></h5>
												
												<?php if( $section3_block4['block4_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section3_block4['block4_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section3_block4['block4_image'] ): ?>
											<img src="<?php echo $section3_block4['block4_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block5 = get_field('section3_block_5', get_option('page_for_posts'));
								if( $section3_block5 ): ?>
									<?php if( $section3_block5['block5_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section3_block5['block5_title']?></h5>
												
												<?php if( $section3_block5['block5_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section3_block5['block5_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section3_block5['block5_image'] ): ?>
											<img src="<?php echo $section3_block5['block5_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>					
				</section>
				*/?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
