<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Brave New World
 * @since Brave New World 3.0
 */

get_header(); ?>
	<div class="hfeed" role="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<nav>
		<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
		<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>
		</nav>
		
		<article class="hentry" id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<span class="by">by</span><address class="vcard author"><span class="fn url"><?php the_author() ?></span></address>
				<time datetime="<?php the_date_xml() ?>" class="published date"><span class="day"><?php the_time('d') ?></span><span class="month"><?php the_time('M') ?></span><span class="year"><?php the_time('Y') ?></span></time>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
		
				<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
				<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
				</a>
				<?php endif; ?>
				
				<?php twentyten_posted_in(); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
				
				<nav>
				<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
				<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>
				</nav>
			</footer>
			<?php comments_template( '', true ); ?>
		</article>
	<?php endwhile; // end of the loop. ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>