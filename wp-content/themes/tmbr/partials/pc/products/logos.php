<?php
if(get_sub_field('prod_products')) : ?>
<div class="row-fluid prod-logos">
  <?php
  while(has_sub_field('prod_products')) :
    $logo = get_sub_field('product_logo');
  ?>
  <div class="span4">
    <div class="img-wrapper">
    <img src="<?php echo $logo['sizes']['medium']; ?>" class="logo" alt="<?php echo $logo['alt']; ?>" />
    </div>
  </div><!-- /span -->
  <?php
  endwhile; ?>
</div><!-- /prod-logos -->
<?php endif; ?>