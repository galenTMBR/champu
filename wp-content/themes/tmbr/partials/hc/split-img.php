<?php
$left_img = get_field('hc_img_left');
$right_img = get_field('hc_img_right');
?>

<div class="row-fluid">
  <div class="span6">
    <img src="<?php echo $left_img['sizes']['large']; ?>" style="margin-bottom: 20px;" alt="<?php echo $left_img['alt']; ?>" />
  </div>
  <div class="span6">
    <img src="<?php echo $right_img['sizes']['large']; ?>" style="margin-bottom: 20px;" alt="<?php echo $right_img['alt']; ?>" />
  </div>
</div>