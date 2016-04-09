<?php get_header();

 if ( have_posts() ) : while ( have_posts() ) : the_post();

?>
<div class="pg-content">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1><?php the_title(); ?></h1>
				<?php
					get_template_part( 'partials/header-content' );
					the_content();
				?>

			</div>
		</div>
	</div>
	<?php get_template_part( 'partials/page-content' ); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>