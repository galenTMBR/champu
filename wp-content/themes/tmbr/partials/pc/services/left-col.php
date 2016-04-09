
<?php
if(get_sub_field('left_col_services')) :
  $countLeft = 1;

  ?>

  <div class="span6">
    <div class="accordion" id="accordionleft">

      <?php
      while(has_sub_field('left_col_services')) :
        $left_header = get_sub_field('sr_left_header');
        ?>

        <div class="accordion-group">

          <!-- HEADER -->
          <div class="accordion-heading">
            <h2>
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionleft" href="#serviceLeft<?php echo $countLeft; ?>">
              <?php echo $left_header; ?>
              </a>
            </h2>
          </div><!-- /accordion-heading -->

          <!-- CONTENT -->
          <div id="serviceLeft<?php echo $countLeft; ?>" class="accordion-body collapse">
            <div class="accordion-inner">

              <?php
              while(has_sub_field('sl_left_content')) :
                if( get_row_layout() == 'sl_sub_price' ) {

                  if(get_sub_field('sl_service_detail')) : ?>

                  <ul>

                  <?php
                  while(has_sub_field('sl_service_detail')) :
                    $leftsub_text = get_sub_field('sl_sub_header');
                    $left_price = get_sub_field('sl_price');
                    ?>

                    <li>
                      <h3>
                        <?php
                        if( $leftsub_text ){ echo $leftsub_text; }
                        if( $left_price ){ echo ' <span class="price">'. $left_price.'</span>'; }
                        ?>
                      </h3>
                    </li>

                  <?php endwhile; ?>

                  </ul>

                  <?php
                endif;

              } /* sub_price */


              elseif( get_row_layout() == 'sl_block_text' ) { ?>

                <p><?php echo get_sub_field('sl_block_text'); ?></p>

              <?php }
            endwhile;
            ?>

            </div><!-- /accordion-inner -->
          </div><!-- /accordion-body -->

        </div><!-- /accordion-group -->


      <?php
      $countLeft++;
    endwhile; ?>

  </div><!-- /accordionLeft -->

</div><!-- /span6 -->
<?php endif; ?>