

<?php
$link = get_sub_field('ct_link');
$text = get_sub_field('ct_text');
?>
<div class="container">
    <div class="row">
      <div class="span12">
<section class="callout-text">
  <hr/>
    <h2 class="header">
      <?php if($link) { ?> <a href="<?php echo $link; ?>" target="_blank"><?php }
        echo $text;
      if($link) { ?> </a> <?php } ?>
    </h2>
  <hr/>
</section>
</div>
</div>
</div>