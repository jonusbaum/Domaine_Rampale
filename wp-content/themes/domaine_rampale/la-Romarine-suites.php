<?php
/**
 * Template Name: La Romarine & suites
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
				<section class="section-one col-md-12 sec-blocks">
					<div class="row align-items-center   ">
						<div class="col-md-7 no-gutters"> 
								<?php
								// vars
								$section1_slider = get_field(section1_slider);
								if( $section1_slider ): ?>
								<ul id="demo3">
									<?php if( $section1_slider['section1_slider_image1'] ): ?>
									<li><a href="#slide1"><img src="<?php echo $section1_slider['section1_slider_image1']?>" alt=" "></a></li>
									<?php endif; ?>
									<?php if( $section1_slider['section1_slider_image2'] ): ?>
									<li><a href="#slide2"><img src="<?php echo $section1_slider['section1_slider_image2']?>" alt=" "> </a></li>
									<?php endif; ?>
									<?php if( $section1_slider['section1_slider_image3'] ): ?>
									<li><a href="#slide3"><img src="<?php echo $section1_slider['section1_slider_image3']?>" alt=" "></a></li>
									<?php endif; ?>
									<?php if( $section1_slider['section1_slider_image4'] ): ?>
									<li><a href="#slide4"><img src="<?php echo $section1_slider['section1_slider_image4']?>" alt=" "></a></li>
									<?php endif; ?>
									 
								</ul> 
								<?php endif; ?>
							 
						</div>
						<div class="col-md-4 my-3 mx-auto text-md-right">
							<?php if( get_field('section1_title') ): ?>
								<h2><?php the_field( 'section1_title')?></h2>
							<?php endif; ?>
							<?php if( get_field('section1_subtitle') ): ?>
								<h3><?php the_field( 'section1_subtitle')?></h3>
							<?php endif; ?>
							<?php if( get_field('section1_content') ): ?>
								<div class="sec-content"><?php the_field( 'section1_content')?></div>
							<?php endif; ?>
							 
						</div>
						
					</div>					
				</section>
				<!--Section One End--> 

				<!--Section Two -->
				<?php if( get_field('section2_title') ): ?>
					<section class="col-md-12 pt-5 mt-3 sec-blocks">
						<div class="">
							<div class="col-md-7 mx-auto mb-5 text-center">
								
									<h2 class="text-center"><?php the_field( 'section2_title')?></h2>
														 
							</div>
							<div class="col-md-8 mx-auto mb-5 list_col_2">
								<?php if( get_field('section2_content') ): ?>
									<div class="mb-5">
										<?php the_field( 'section2_content')?>
									</div>
								<?php endif; ?>

								<?php if( get_field('reserver_url') ): ?>
									<div class="text-center">
										<a class="reserver_btn" href="<?php the_field( 'reserver_url')?>"><?php esc_html_e('RÉSERVER','domaine_rampale')?></a>
									</div>
								<?php endif; ?>							 
							</div>
						</div>
					</section>
				<?php endif; ?>	
				<!--Section Two End-->

				<!--Section Three -->
				<section class="col-md-12 pt-5 mt-3 sec-blocks">
					<div class="text-center">
						<div class="col-md-7 mx-auto mb-5">
							<?php if( get_field('section3_title') ): ?>
								<h2 class="text-center"><?php the_field( 'section3_title')?></h2>
							<?php endif; ?>
							 
						</div>

						<div class="row">
							<?php
									// vars
								$section3_block1 = get_field(section3_block1);
								if( $section3_block1 ): ?>
								<div class="col-md no-gutters over_block" style="background: url('<?php echo $section3_block1['section3_block1_image']?>')"> 
																			 
									<?php if( $section3_block1['section3_block1_title'] ): ?>
										 <h5><?php echo $section3_block1['section3_block1_title']?></h5>
									<?php endif; ?>

									<?php if( $section3_block1['section3_block1_text'] ): ?>
										 <p><?php echo $section3_block1['section3_block1_text']?></p>
									<?php endif; ?>

									<?php if( $section3_block1['section3_block1_url'] ): ?>
										 <a href="<?php echo $section3_block1['section3_block1_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
									<?php endif; ?>
											 
									 
								</div>
							<?php endif; ?>

							<?php
									// vars
								$section3_block2 = get_field(section3_block2);
								if( $section3_block2 ): ?>
									<?php if( $section3_block2['section3_block2_title'] ): ?>
										<div class="col-md no-gutters over_block" style="background: url('<?php echo $section3_block2['section3_block2_image']?>')"> 
																					 
											 
											<h5><?php echo $section3_block2['section3_block2_title']?></h5>
											

											<?php if( $section3_block2['section3_block2_text'] ): ?>
												 <p><?php echo $section3_block2['section3_block2_text']?></p>
											<?php endif; ?>

											<?php if( $section3_block2['section3_block2_url'] ): ?>
												 <a href="<?php echo $section3_block2['section3_block2_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
											<?php endif; ?>
													 
											 
										</div>
								<?php endif; ?>
							<?php endif; ?>
							 
 
						</div>
					</div>					
				</section>
				<!--Section Three End-->
				 


			</article>

		<?php endwhile; // End of the loop.
		?>

		 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
