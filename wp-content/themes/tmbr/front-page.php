<?php get_header();

 if ( have_posts() ) : while ( have_posts() ) : the_post();

?>
<div class="pg-content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <?php
          get_template_part( 'partials/header-content' );
          the_content();
          get_template_part( 'partials/page-content' );
        ?>
      </div>
    </div>

  </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>