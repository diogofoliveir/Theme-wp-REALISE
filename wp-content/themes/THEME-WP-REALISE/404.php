<?php
/**
 * The template for displaying the 404 template in the REALISE Theme.
 *
 * @package WordPress
 * @subpackage REALISE_Theme
 * @since REALISE_Theme 3000.1.0
 */

get_header();
?>

<main id="site-content">

	<div class="section-inner thin error404-content">

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'themerealise' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>

		<?php
		get_search_form(
			array(
				'aria_label' => __( '404 not found', 'themerealise' ),
			)
		);
		?>

	</div><!-- .section-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
