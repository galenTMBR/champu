<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Brave New World
 * @since Brave New World 3.0
 */
?>

<nav id="sidebar" role="navigation">
	<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
		<section>
			<?php get_search_form(); ?>
		</section>
		<section>
			<h2><?php _e( 'Archives', 'twentyten' ); ?></h2>
			<ol>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ol>
		</section>
		<section>
			<h2><?php _e( 'Meta', 'twentyten' ); ?></h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</section>
	<?php endif; // end primary widget area ?>

	<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
		<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	<?php endif; ?>
</nav>