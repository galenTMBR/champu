<?php
/*
Template Name: Services


*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="pg-content">
	<div class="container">
  <div class="row">
      <div class="span12">
        <h1><?php the_title(); ?></h1>
        </div></div>
  <?php get_template_part( 'partials/header-content' );
?>
</div>

<div class="container">
		<div class="row">
			<div class="span12">

				<?php get_template_part( 'inc/content', 'products' ); ?>

	</div><!-- /span6 -->
</div><!-- /row-fluid -->

	</div>



		<?php endwhile; ?>

</div>

<?php get_footer(); ?>