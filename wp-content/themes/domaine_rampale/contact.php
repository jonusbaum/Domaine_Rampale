<?php
/**
 * Template Name: Contact
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
					<div class="row align-items-center">
						<div class="col-md-5 mx-auto  py-5"> 
							<?php if( get_field('title') ): ?>
								<h2 class="text-center mb-5"><?php the_field( 'title')?></h2>
							<?php endif; ?>	
							<ul class="contact_list">
								<?php if( get_field('adress') ): ?>
									<li class="address"><?php the_field( 'adress')?></li> 
								<?php endif; ?>	
								<?php if( get_field('by_plane') ): ?>
									<li class="by_plane"><?php the_field( 'by_plane')?> </li> 
								<?php endif; ?>	
								<?php if( get_field('by_train') ): ?>
									<li class="by_train"><?php the_field( 'by_train')?> </li> 
								<?php endif; ?>	
								<?php if( get_field('parking') ): ?>
									<li class="parking"><?php the_field( 'parking')?> </li> 
								<?php endif; ?>	
								<?php if( get_field('electric_terminals') ): ?>
									<li class="electric_terminals"><?php the_field( 'electric_terminals')?> </li> 
								<?php endif; ?>		 
							</ul>
						</div>
						<div class="col-md-6 no-gutters contact_map">
							<?php if( get_field('map') ): ?>
								<?php the_field( 'map')?> 
							<?php endif; ?>	
							 
						</div>
						
					</div>					
				</section>
				<!--Section One End--> 

				 

				<!--Section Two -->
				<section class="col-md-12   sec-blocks no-gutters over_block" style="background: url('<?php the_field( 'section2_image')?>')">
					<div class="text-center">
						<div class="col-md-7 mx-auto mb-5">
							<?php if( get_field('section2_title') ): ?>
								<h2 class="text-center"><?php the_field( 'section2_title')?></h2>
							<?php endif; ?>
							 
						</div>

						<div class="row mt-3">
							<?php
									// vars
								$section2_block1 = get_field(section2_block1);
								if( $section2_block1 ): ?>
								<div class="col-md" style="background: url('<?php echo $section3_block1['section3_block1_image']?>')"> 
																			 
									<?php if( $section2_block1['block1_title'] ): ?>
										 <h5><?php echo $section2_block1['block1_title']?></h5>
									<?php endif; ?>

									<?php if( $section2_block1['block1_content'] ): ?>
										 <p><?php echo $section2_block1['block1_content']?></p>
									<?php endif; ?>

									 
								</div>
							<?php endif; ?>

							<?php
									// vars
								$section2_block2 = get_field(section2_block2);
								if( $section2_block2 ): ?>
									
										<div class="col-md"> 
											<?php if( $section2_block2['block2_title'] ): ?>
												<h5><?php echo $section2_block2['block2_title']?></h5>
											<?php endif; ?>

											<?php if( $section2_block2['block2_content'] ): ?>
												 <p><?php echo $section2_block2['block2_content']?></p>
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
