<?php
$header = get_sub_field('staff_header');
$owner_name = get_sub_field('owner_name');
$owner_bio = get_sub_field('owner_bio');

?>


<div class="full-width section staff-content">
    <div class="container">
      <div class="row">
        <div class="span12">
          <h2><?php echo $header; ?></h2>

          <div class="row-fluid">
            <div class="span12">
              <h3 class="primary"><?php echo $owner_name; ?></h3>
              <?php echo $owner_bio; ?>
            </div>
          </div>


            <?php
            if(get_sub_field('s_staff')){
              while(has_sub_field('s_staff')) {
                ?>
                <div class="row-fluid">
                <div class="span7">
                  <div class="padded">
                  <h3><?php the_sub_field('ss_name'); ?></h3>
                  <?php the_sub_field('ss_bio'); ?>
                  </div>
                </div>
                </div>
                <?php
              }
            }
            ?>

        </div><!--/span12 -->
      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /full-width -->