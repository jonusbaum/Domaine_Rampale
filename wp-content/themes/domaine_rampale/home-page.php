<?php
/**
 * Template Name: Home
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

						<div class="reservation-widget">
								<div id="widgetMB2"></div>
								<script>
								var langue = 'fr';
								var id_etab = '5206b2cdd076f9986fc21e106251b4f6';
								var param = '1201202000020000001';
								</script>
								<script src="https://www.secure-direct-hotel-booking.com/widget/scriptWidget.js"></script>
						</div>
					</div>
				</section>

				<!--Section One-->
				<section class="section-one col-md-12 sec-blocks">
					<div class="row align-items-center">
						<div class="col-md-5 my-3  mx-auto">
							<?php if( get_field('section_one_title') ): ?>
								<h2><?php the_field( 'section_one_title')?></h2>
							<?php endif; ?>
							<?php if( get_field('section_one_subheading') ): ?>
								<h3><?php the_field( 'section_one_subheading')?></h3>
							<?php endif; ?>
							<?php if( get_field('section_one_content') ): ?>
								<div class="sec-content"><?php the_field( 'section_one_content')?></div>
							<?php endif; ?>
							<?php if( get_field('reserver_url') ): ?>
								<a href="<?php the_field( 'reserver_url')?>" class="sec-btn btn"><?php esc_html_e('RÉSERVER','domaine_rampale')?></a>
							<?php endif; ?>
						</div>
						<div class="col-md-6 no-gutters"> 
								<?php
								// vars
								$slider = get_field(slider);
								if( $slider ): ?>
								<ul id="demo1">
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
					</div>					
				</section>
				<!--Section One End-->

				<!--Section Two -->
				<section class="section-two col-md-12 sec-blocks">
					<div class="row align-items-center   text-center">
						<div class="col-md-12 no-gutters"> 
								 
								<ul id="demo2">
									<?php
									// vars
									$slide1 = get_field(slide1);
									if( $slide1 ): ?>
										
										<li>
											<div class="slider-text">
												<?php  if( $slide1['slide1_title'] ):   ?>
													<h2><?php echo $slide1['slide1_title']?></h2>
												<?php endif; ?>
												<?php  if( $slide1['slide1_subtitle'] ):   ?>
													<h3><?php echo $slide1['slide1_subtitle']?></h3>
												<?php endif; ?>
												<?php if( $slide1['slide1_content'] ): ?>
													<div class="sec-content"><?php echo $slide1['slide1_content']?></div>
												<?php endif; ?>
												<?php if( $slide1['slide1_url'] ): ?>
													<a href="<?php echo $slide1['slide1_url']?>" class="sec-btn btn"><?php esc_html_e('DÉCOUVRIR','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<a href="#slide1"><img src="<?php echo $slide1['slide1_image']?>" alt=" "></a>
										</li>
										 
									<?php endif; ?>

									 
 
									 
								</ul> 
								
							 
						</div>
						
						
					</div>					
				</section>
				<!--Section Two End-->
				 
				<!--Section Three -->
				<section class="section-three col-md-12 sec-blocks">
					<div class="row align-items-center">
						<div class="col-md-7 no-gutters"> 
								<?php
								// vars
								$slider3 = get_field(slider3);
								if( $slider3 ): ?>
								<ul id="demo3">
									<?php if( $slider3['slider3_image_one'] ): ?>
									<li><a href="#slide1"><img src="<?php echo $slider3['slider3_image_one']?>" alt=" "></a></li>
									<?php endif; ?>
									<?php if( $slider3['slider3_image_two'] ): ?>
									<li><a href="#slide2"><img src="<?php echo $slider3['slider3_image_two']?>" alt=" "> </a></li>
									<?php endif; ?>
									<?php if( $slider3['slider3_image_three'] ): ?>
									<li><a href="#slide3"><img src="<?php echo $slider3['slider3_image_three']?>" alt=" "></a></li>
									<?php endif; ?>
									 
								</ul> 
								<?php endif; ?>
							 
						</div>
						<div class="col-md-4 my-3 mx-auto text-md-right">
							<?php if( get_field('section_three_title') ): ?>
								<h2><?php the_field( 'section_three_title')?></h2>
							<?php endif; ?>
							<?php if( get_field('section3-subtitle') ): ?>
								<h3><?php the_field( 'section3-subtitle')?></h3>
							<?php endif; ?>
							<?php if( get_field('section3_content') ): ?>
								<div class="sec-content"><?php the_field( 'section3_content')?></div>
							<?php endif; ?>
							<?php if( get_field('decouvrir_url') ): ?>
								<a href="<?php the_field( 'decouvrir_url')?>" class="sec-btn btn"><?php esc_html_e('DÉCOUVRIR','domaine_rampale')?></a>
							<?php endif; ?>
						</div>
						
					</div>					
				</section>
				<!--Section Three End-->

				<!--Section Four-->
				<section class="section-four-top">
					<img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="logo">
				</section>
				<section class="section-four col-md-12 sec-blocks">

					<?php if( get_field('section_4_title') ): ?>
						<h2 class="text-center"><?php the_field( 'section_4_title')?></h2>
					<?php endif; ?>
					<div class="section4_block_group">
						<div class="col-md-11 mx-auto section4_block_group_inner">
							<div class="row">
								<?php
								// vars
								$section4_block1 = get_field(section4_block_1);
								if( $section4_block1 ): ?>
									<?php if( $section4_block1['block1_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
												<h5><?php echo $section4_block1['block1_title']?></h5>
												
												<?php if( $section4_block1['block1_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section4_block1['block1_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section4_block1['block1_image'] ): ?>
												<img src="<?php echo $section4_block1['block1_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section4_block2 = get_field(section4_block_2);
								if( $section4_block2 ): ?>
									<?php if( $section4_block2['block2_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
												<h5><?php echo $section4_block2['block2_title']?></h5>
												
												<?php if( $section4_block2['block2_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section4_block2['block2_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section4_block2['block2_image'] ): ?>
											<img src="<?php echo $section4_block2['block2_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section4_block3 = get_field(section4_block_3);
								if( $section4_block3 ): ?>
									<?php if( $section4_block3['block3_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section4_block3['block3_title']?></h5>
												
												<?php if( $section4_block3['block3_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section4_block3['block3_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section4_block3['block3_image'] ): ?>
											<img src="<?php echo $section4_block3['block3_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section4_block4 = get_field(section4_block_4);
								if( $section4_block4 ): ?>
									<?php if( $section4_block4['block4_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section4_block4['block4_title']?></h5>
												
												<?php if( $section4_block4['block4_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section4_block4['block4_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section4_block4['block4_image'] ): ?>
											<img src="<?php echo $section4_block4['block4_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>

								<?php
								// vars
								$section4_block5 = get_field(section4_block_5);
								if( $section4_block5 ): ?>
									<?php if( $section4_block5['block5_title'] ): ?>
										<div class="sec4-block col-md no-gutters">
											<div class="sec4-block-inner">
												
													<h5><?php echo $section4_block5['block5_title']?></h5>
												
												<?php if( $section4_block5['block5_url'] ): ?>
													<a class="sec4-block-btn" href="<?php echo $section4_block5['block5_url']?>"><?php esc_html_e('voir plus','domaine_rampale')?></a>
												<?php endif; ?>
											</div>
											<?php if( $section4_block5['block5_image'] ): ?>
											<img src="<?php echo $section4_block5['block5_image']?>" alt=" ">
											<?php endif; ?>
										</div>
									<?php endif; ?>
								<?php endif; ?>
							</div>
						</div>
					</div>					
				</section>
				<!--Section Four End-->

				<!--Section Five-->
				<section class="section-five col-md-12 sec-blocks">
					<div class="row align-items-center ">
						<div class="col-md-7 no-gutters"> 
								<?php
								// vars
								$slider5 = get_field(slider5);
								if( $slider5 ): ?>
								<ul id="demo6">
									<?php if( $slider5['slider5_image_one'] ): ?>
									<li><a href="#slide1"><img src="<?php echo $slider5['slider5_image_one']?>" alt=" "></a></li>
									<?php endif; ?>
									<?php if( $slider5['slider5_image_two'] ): ?>
									<li><a href="#slide2"><img src="<?php echo $slider5['slider5_image_two']?>" alt=" "> </a></li>
									<?php endif; ?>
									<?php if( $slider5['slider5_image_three'] ): ?>
									<li><a href="#slide3"><img src="<?php echo $slider5['slider5_image_three']?>" alt=" "></a></li>
									<?php endif; ?>
									 
								</ul> 
								<?php endif; ?>
							 
						</div>
						<div class="col-md-5 my-3 mx-auto text-slider">
							<?php if( get_field('section5_title') ): ?>
								<h2 class="text-md-right"><?php the_field( 'section5_title')?></h2>
							<?php endif; ?>
							<ul id="demo7">
							<?php
								 
								 // vars
								$text_slide1 = get_field(text_slide1);
								if( $text_slide1 ): ?>								
									 <?php if( $text_slide1['text_slide_title1'] ): ?>
										<li class="text-md-right">
										<a href="#slide1">
										<div class="text_slider_content">
											<h3><?php echo $text_slide1['text_slide_title1']?></h3>
											<div class="sec-content">
											<?php echo $text_slide1['text_slide_content1']?>
											</div>
											</div>
											</a>
											
										</li>
									<?php endif; ?>
								<?php endif; ?>								  
								<?php
								 
								 // vars
								$text_slide2 = get_field(text_slide2);
								if( $text_slide2 ): ?>								
									 <?php if( $text_slide2['text_slide_title2'] ): ?>
										<li class="text-md-right"><a href="#slide2">
										<div class="text_slider_content">
											<h3><?php echo $text_slide2['text_slide_title2']?></h3>
											<div class="sec-content">
											<?php echo $text_slide2['text_slide_content2']?>
											</div>
											</div>
											</a>
										</li>
									<?php endif; ?>
								<?php endif; ?>	

								<?php
								 
								 // vars
								$text_slide3 = get_field(text_slide3);
								if( $text_slide3 ): ?>								
									 <?php if( $text_slide3['text_slide_title3'] ): ?>
										<li class="text-md-right"><a href="#slide3">
										<div class="text_slider_content">
											<h3><?php echo $text_slide3['text_slide_title3']?></h3>
											<div class="sec-content">
											<?php echo $text_slide3['text_slide_content3']?>
											</div>
											</div>
											</a>
										</li>
									<?php endif; ?> 
								<?php endif; ?>	
								 </ul>
								 
							<?php if( get_field('section5_url') ): ?>
								<div class="text-md-right section5_link">
									<a href="<?php the_field( 'section5_url')?>" class="sec-btn btn"><?php esc_html_e('RÉSERVER','domaine_rampale')?></a>
								</div>
							<?php endif; ?>
						</div>
					</div>					
				</section>
				<!--Section Five End-->

				<!--Section Six-->
				<section class="section-six col-md-12 sec-blocks">
					<div class="row align-items-center ">
						<div class="col-md-4 my-3 mx-auto">
							<?php if( get_field('section6_title') ): ?>
								<h2><?php the_field( 'section6_title')?></h2>
							<?php endif; ?>
							<?php if( get_field('section6_subtitle') ): ?>
								<h3><?php the_field( 'section6_subtitle')?></h3>
							<?php endif; ?>
							<?php if( get_field('section6_content') ): ?>
								<div class="sec-content"><?php the_field( 'section6_content')?></div>
							<?php endif; ?>
							<?php if( get_field('section6_url') ): ?>
								<a href="<?php the_field( 'section6_url')?>" class="sec-btn btn"><?php esc_html_e('DÉCOUVRIR','domaine_rampale')?></a>
							<?php endif; ?>
						</div>
						<div class="col-md-7 no-gutters"> 
								<?php
								// vars
								$slider6 = get_field(slider6);
								if( $slider6 ): ?>
								<ul id="demo5">
									<?php if( $slider6['slider6_image_one'] ): ?>
									<li><a href="#slide1"><img src="<?php echo $slider6['slider6_image_one']?>" alt=" "></a></li>
									<?php endif; ?>
									<?php if( $slider6['slider6_image_two'] ): ?>
									<li><a href="#slide2"><img src="<?php echo $slider6['slider6_image_two']?>" alt=" "> </a></li>
									<?php endif; ?>
									<?php if( $slider6['slider6_image_three'] ): ?>
									<li><a href="#slide3"><img src="<?php echo $slider6['slider6_image_three']?>" alt=" "></a></li>
									<?php endif; ?>
									 
								</ul> 
								<?php endif; ?>
							 
						</div>
						
					</div>					
				</section>
				<!--Section Six End-->


			</article>

		<?php endwhile; // End of the loop.
		?>

		<!--Section Seven -->
		<section class="section-seven sec-blocks">
			<div class="col-md-11 mx-auto">
				<h2 class="text-center"><?php esc_html_e('Blog','domaine_rampale')?> </h2>
				<?php 
					// the query
					$the_query = new WP_Query( array(
					  'posts_per_page' => 3,
					)); 
				?>
				<ul class="row">
					<?php if ( $the_query->have_posts() ) : ?>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li class="col-md-4">
								<?php the_post_thumbnail();?>
								<h3><?php the_title(); ?></h3>
								<p><?php $excerpt = get_the_excerpt();
								$excerpt = substr( $excerpt , 0, 140); 
								echo $excerpt;?></p>
								<a href="<?php the_permalink() ?>" class="post_link"><?php esc_html_e('voir plus','domaine_rampale')?> </a>
							</li>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php __('No News'); ?></p>
					<?php endif; ?>
				</ul>

				<p class="text-center"><a href="<?php echo get_page_link(156); ?>" class="sec-btn btn"><?php esc_html_e('TOUTES LES ACTUALITÉS','domaine_rampale')?> </a></p>
			</div>
		</section>
		<!--Section Seven End-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_footer();
