
<?php
$header1 = get_sub_field('cb_header_1');
$link1 = get_sub_field('cb_link_1');
$text1 = get_sub_field('cb_content_1');

$header2 = get_sub_field('cb_header_2');
$link2 = get_sub_field('cb_link_2');
$text2 = get_sub_field('cb_content_2');

$header3 = get_sub_field('cb_header_3');
$link3 = get_sub_field('cb_link_3');
$text3 = get_sub_field('cb_content_3');
?>
<section class="content-buckets">
<!-- BUCKETS -->
  <div class="row buckets">

    <div class="span4">
      <h2>
        <?php if($link1) { ?> <a href="<?php echo $link1; ?>"><?php } echo $header1; if($link1) { ?> </a> <?php } ?>
      </h2>
      <?php echo $text1; ?>
    </div>

    <div class="span4">
      <h2>
        <?php if($link2) { ?> <a href="<?php echo $link2; ?>"><?php } echo $header2; if($link2) { ?> </a> <?php } ?>
      </h2>
      <?php echo $text2; ?>
    </div>

    <div class="span4">
      <h2>
        <?php if($link3) { ?> <a href="<?php echo $link3; ?>"><?php } echo $header3; if($link3) { ?> </a> <?php } ?>
      </h2>
      <?php echo $text3; ?>
    </div>

  </div><!-- /buckets -->
  </section>