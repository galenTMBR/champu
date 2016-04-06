<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Brave New World
 * @since Brave New World 3.0
 */

get_header(); ?>
<div class="hfeed" role="main">
<?php if ( have_posts() ) : ?>
	<h1><?php printf( __( 'Search Results for: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h1>
	<?php
	/* Run the loop for the search to output the results.
	 * If you want to overload this in a child theme then include a file
	 * called loop-search.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'search' );
	?>
<?php else : ?>
	<h1><?php _e( 'Nothing Found', 'twentyten' ); ?></h1>
	<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
	<?php get_search_form(); ?>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>