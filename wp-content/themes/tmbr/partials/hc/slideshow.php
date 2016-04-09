<!-- SLIDESHOW -->
  <div class="flexslider">
      <ul class="slides">
      <?php
      $images = get_field('hc_slideshow');
      if($images) :
        foreach( $images as $image ):
          ?>
        <li><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></li>

<?php endforeach; endif; ?>
    </ul>
  </div><!-- /flexslider -->