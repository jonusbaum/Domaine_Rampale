<?php
/**
 * Template Name: SÉMINAIRES ET PRIVATISATION 
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
						<?php if( get_field('header_tile') ): ?>
							<h1><?php the_field( 'header_tile')?></h1>
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
								$slider = get_field(slider);
								if( $slider ): ?>
								<ul id="demo3">
									<?php if( $slider['slider_image_one'] ): ?>
									<li><a href="#slide1"><img src="<?php echo $slider['slider_image_one']?>" alt=" "></a></li>
									<?php endif; ?>
									<?php if( $slider['slider_image_two'] ): ?>
									<li><a href="#slide2"><img src="<?php echo $slider['slider_image_two']?>" alt=" "> </a></li>
									<?php endif; ?>
									<?php if( $slider['slider_image_three'] ): ?>
									<li><a href="#slide3"><img src="<?php echo $slider['slider_image_three']?>" alt=" "></a></li>
									<?php endif; ?>
									
									 
								</ul> 
								<?php endif; ?>
							 
						</div>
						<div class="col-md-4 my-3 mx-auto text-md-right">
							<?php if( get_field('section_one_title') ): ?>
								<h2><?php the_field( 'section_one_title')?></h2>
							<?php endif; ?>
							<?php if( get_field('section_one_subheading') ): ?>
								<h3><?php the_field( 'section_one_subheading')?></h3>
							<?php endif; ?>
							<?php if( get_field('section_one_content') ): ?>
								<div class="sec-content"><?php the_field( 'section_one_content')?></div>
							<?php endif; ?>
							<?php /*<?php if( get_field('reserver_url') ): ?>
								<a href="<?php the_field( 'reserver_url')?>" class="sec-btn btn"><?php esc_html_e('NOUS CONTACTER','domaine_rampale')?></a>
							<?php endif; ?><?php */?>
						</div>
						
					</div>					
				</section>
				<!--Section One End--> 

				<!--Section Two -->
				<?php if( get_field('section2_title') ): ?>
					<section class="col-md-12 pt-5 mt-3 mb-3 sec-blocks">
						<div class="">
							<div class="col-md-7 mx-auto mb-5 text-center">
								
									<h2 class="text-center"><?php the_field( 'section2_title')?></h2>
														 
							</div>
							<div class="col-md-6 mx-auto mb-5 list_col_2">
								<?php if( get_field('section2_content') ): ?>
									<div class="mb-5">
										<?php the_field( 'section2_content')?>
									</div>
								<?php endif; ?>

								<?php if( get_field('reserver_url') ): ?>
									<div class="text-center">
										<a class="reserver_btn" href="<?php the_field( 'reserver_url')?>"><?php esc_html_e('NOUS CONTACTER','domaine_rampale')?></a>
									</div>
								<?php endif; ?>							 
							</div>
						</div>
					</section>
				<?php endif; ?>	
				<!--Section Two End-->

				<!--Section Three -->
				<section class="seminaire section-four col-md-12 sec-blocks" style="background: url(<?php the_field( 'section3_image')?>)">

					<?php if( get_field('section_3_title') ): ?>
						<h2 class="text-center"><?php the_field( 'section_3_title')?></h2>
					<?php endif; ?>
					<div class="section4_block_group">
						<div class="col-md-11 mx-auto section4_block_group_inner">
							<div class="row">
								<?php
								// vars
								$section3_block1 = get_field(section3_block_1);
								if( $section3_block1 ): ?>
									<?php if( $section3_block1['block1_title'] ): ?>
										<div class="sec4-block col-md no-gutters" style="background: <?php echo $section3_block1['block1_bg_color']?>">
											<div class="sec4-block-inner">
												
												<h5><?php echo $section3_block1['block1_title']?></h5>
												
												<?php if( $section3_block1['block1_content'] ): ?>
													 <?php echo $section3_block1['block1_content']?> 
												<?php endif; ?>
											</div>
											 
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block2 = get_field(section3_block_2);
								if( $section3_block2 ): ?>
									<?php if( $section3_block2['block2_title'] ): ?>
										<div class="sec4-block col-md no-gutters" style="background: <?php echo $section3_block2['block2_bg_color']?>">
											<div class="sec4-block-inner">
												
												<h5><?php echo $section3_block2['block2_title']?></h5>
												
												<?php if( $section3_block2['block2_content'] ): ?>
													 <?php echo $section3_block2['block2_content']?> 
												<?php endif; ?>
											</div>
											 
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block3 = get_field(section3_block_3);
								if( $section3_block3 ): ?>
									<?php if( $section3_block3['block3_title'] ): ?>
										<div class="sec4-block col-md no-gutters" style="background: <?php echo $section3_block3['block3_bg_color']?>">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section3_block3['block3_title']?></h5>
												
												<?php if( $section3_block3['block3_content'] ): ?>
													 <?php echo $section3_block3['block3_content']?> 
												<?php endif; ?>
											</div>
											 
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section3_block4 = get_field(section3_block_4);
								if( $section3_block4 ): ?>
									<?php if( $section3_block4['block4_title'] ): ?>
										<div class="sec4-block col-md no-gutters" style="background: <?php echo $section3_block4['block4_bg_color']?>">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section3_block4['block4_title']?></h5>
												
												<?php if( $section3_block4['block4_content'] ): ?>
													 <?php echo $section3_block4['block4_content']?> 
												<?php endif; ?>
											</div>
											 
										</div>
									<?php endif; ?>
								<?php endif; ?>

								 
							</div>
						</div>
					</div>					
				</section>
				<!--Section Three End-->
				 
				<!--Section Four -->
				<section class="section-two col-md-12   sec-blocks">
					<div class="text-center">  
						<div class="row">
							 
								<div class="col-md over_block" style="background: url('<?php the_field( 'section4_image')?>')"> 
									<div class="col-md-8 mx-auto">										 
										<?php if( get_field('section4_title') ): ?>
											 <h2><?php the_field( 'section4_title')?></h2>
										<?php endif; ?>

										<?php if( get_field('section4_subtitle') ): ?>
											 <h3><?php the_field( 'section4_subtitle')?></h3>
										<?php endif; ?>

										<?php if( get_field('section4_content') ): ?>
											  <?php the_field( 'section4_content')?> 
										<?php endif; ?>

										<?php if( get_field('section4_url') ): ?>
											 <a class="sec-btn btn mt-3"  href="<?php the_field( 'section4_url')?>"><?php esc_html_e('NOUS CONTACTER','domaine_rampale')?></a>
										<?php endif; ?>
									</div>		 
									 
								</div>
							 

							 
 
						</div>
					</div>					
				</section>
				<!--Section Four End-->

			</article>

		<?php endwhile; // End of the loop.
		?>

		 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
