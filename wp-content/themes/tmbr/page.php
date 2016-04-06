<?php get_header(); ?>
<div class="pg-content">	
<div class="container">
	<div class="row">
	<div class="span12">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
				<h1><?php the_title(); ?></h1>		
		
	<?php the_content(); ?>
	</div>
	</div>
	<?php endwhile; ?>
</div>
</div>

<?php get_footer(); ?>