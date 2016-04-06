<?php
/*

Template Name: Placeholder
*/

get_header(); ?>

	<div class="row">
	<div class="span12">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
				<h1><?php the_title(); ?></h1>		
		
	<?php the_content(); ?>
	</div>
	</div>
	<div class="row">
	<div class="span12">
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
			</div>
	</div>	<?php endwhile; ?>


<?php get_footer(); ?>