<?php get_header(); ?>
	
	<div class="container pg-content">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="span8">
				<?php get_template_part('entry'); ?>
				<?php if ( ! post_password_required() ) comments_template('', true); ?>
				<?php endwhile; endif; ?>
				<footer class="footer">
					<?php get_template_part('nav', 'below-single'); ?>
					</footer>
					</div>
<?php get_sidebar(); ?>
		
		</div><!-- /row -->
	</div><!-- /pg-content -->
	
<?php get_footer(); ?>