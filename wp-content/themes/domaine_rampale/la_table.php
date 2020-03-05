<?php
/**
 * Template Name: LA Table
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
								<a href="<?php the_field( 'reserver_url')?>" class="sec-btn btn"><?php esc_html_e('NOUS CONTACTER','domaine_rampale')?></a>
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
					<div class="row align-items-center">
					 	  
						<div class="col-md-12 no-gutters over_block text-center" style="background: url('<?php the_field( 'section2_image')?>')"> 
							<div class="col-md-8 mx-auto">								 
								<?php if( get_field('section2_title') ): ?>
									 <h2><?php the_field( 'section2_title')?></h2>
								<?php endif; ?>

								<?php if( get_field('section2_subtitle') ): ?>
									 <h3><?php the_field( 'section2_subtitle')?></h3>
								<?php endif; ?>
								<?php if( get_field('section2_content') ): ?>
									 <?php the_field( 'section2_content')?>
								<?php endif; ?>

								<?php if( get_field('section2_url') ): ?>
									 <a class="sec-btn btn mt-3" href="<?php the_field( 'section2_url')?>"><?php esc_html_e('NOUS CONTACTER','domaine_rampale')?></a>
								<?php endif; ?>
									 
							</div>
						</div>
						 
						
					</div>					
				</section>
				<!--Section Two End-->

				<!--Section Three-->
				<section class="section-four-top">
					<img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="logo">
				</section>
				<section class="section-four col-md-12 sec-blocks">

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
								$section3_block2 = get_field(section3_block_2);
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
								$section3_block3 = get_field(section3_block_3);
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
								$section3_block4 = get_field(section3_block_4);
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
								$section3_block5 = get_field(section3_block_5);
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
				<!--Section Four End-->

				 

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
