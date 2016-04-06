<?php get_header(); ?>
	<div class="container pg-content">
		<div class="row">

<div class="span8">
<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'blankslate' ); ?><span><?php single_tag_title(); ?></span></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part('entry'); ?>
<?php endwhile; endif; ?>
</div><!-- /span -->
<?php get_template_part('nav', 'below'); ?>

<?php get_sidebar(); ?>
</div><!-- /row -->
	</div><!-- /pg-content -->

<?php get_footer(); ?>