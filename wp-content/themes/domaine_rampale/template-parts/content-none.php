<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Domaine_rampale
 */

?>

<section class="no-results not-found">
	<header class="page-header mb-5">
				<div class="page_header " style="background-image: url(<?php echo get_template_directory_uri().'/images/DR_blog_COVER.jpg';?>)">
								<div class="text-center">
									<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'domaine_rampale' ); ?></h1>
									</h1>
								</div>
						</div>
				 
			</header><!-- .page-header -->
	 
 <div class="container py-5">
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'domaine_rampale' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'domaine_rampale' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'domaine_rampale' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</div>
</section><!-- .no-results -->
