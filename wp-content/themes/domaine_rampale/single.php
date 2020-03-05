<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Domaine_rampale
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			 

		<?php
		while ( have_posts() ) :
			the_post();
        ?>
        <header class="entry-header">
			<?php
			if ( is_singular() ) :?>
				<div class="page_header" style="background-image: url(<?php if( get_field('header_image') ) { 
					the_field( 'header_image'); 
				} else { 
					echo get_template_directory_uri().'/images/DR_blog_COVER.jpg';
				}?>)">
						<div class="text-center">
							<?php if( get_field('header_tile') ){ ?>
								<h1><?php the_field( 'header_tile')?></h1>
							<?php }else{ ?>
								<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
							<?php } ?>
							<?php if( get_field('header_subtitle') ): ?>
								<h3><?php the_field( 'header_subtitle')?></h3>
							<?php endif; ?>
						</div>
				</div>
			 
			<?php endif;?>

			 
		</header>
		<div class="container mt-5">
			
			<?php	get_template_part( 'template-parts/content', get_post_type() );
        ?>
        
        <?php
			$prev_post = get_previous_post();
			$prev_id = $prev_post->ID;
			$prev_permalink = get_permalink($prev_id);
			$next_post = get_next_post();
			$next_id = $next_post->ID;
			$next_permalink = get_permalink($next_id);
			$prevThumbnail = get_the_post_thumbnail( $prev_id );
			$nextthumbnail = get_the_post_thumbnail( $next_id );
			?>
			<aside class="footer-pagination container">
				<nav class="row">
				<?php $prev_post = get_previous_post(true);
				if($prev_post) {?>
					<div class="col-6 text-left">
						<div class="previous-timeline">
							<a href="<?php echo $prev_permalink; ?>" rel="prev">
								<span class="meta-nav">←</span> <?php esc_html_e('Précédente','domaine_rampale')?>
								<h5><?php echo $prev_post->post_title; ?></h5>
								<?php echo $prevThumbnail;?>
							</a>
						</div>
					</div>
					<?php } $next_post = get_next_post(true);
					if($next_post) { ?>
					<div class="col-6 text-right">
						<div class="next-timeline">
							<a href="<?php echo $next_permalink; ?>">
							<?php esc_html_e('Suivant','domaine_rampale')?> <span class="meta-nav">→</span>
								<h5><?php echo $next_post->post_title; ?></h5>
								<?php echo $nextthumbnail;?>
							</a>
						</div>
					</div>
					<?php } ?>	
				</nav>
			</aside>

	        <?php
			
				//the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
			//	if ( comments_open() || get_comments_number() ) :
			//		comments_template();
			//	endif;
	        ?>
	    </div>
		<?php endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
