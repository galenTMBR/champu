<?php
$img = get_field('hc_single_img');
?>

<div class="row-fluid">
  <div class="span12">
    <img src="<?php echo $img['sizes']['large']; ?>" style="margin-bottom: 20px;" alt="<?php echo $img['alt']; ?>" />
  </div>
</div>