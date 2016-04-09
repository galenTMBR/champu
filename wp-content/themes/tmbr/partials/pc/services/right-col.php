
<?php
if(get_sub_field('right_col_services')) :
  $countRight = 1;

  ?>

  <div class="span6">
    <div class="accordion" id="accordionRight">

      <?php
      while(has_sub_field('right_col_services')) :
        $right_header = get_sub_field('sr_right_header');
        ?>

        <div class="accordion-group">

          <!-- HEADER -->
          <div class="accordion-heading">
            <h2>
              <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionRight" href="#serviceRight<?php echo $countRight; ?>">
              <?php echo $right_header; ?>
              </a>
            </h2>
          </div><!-- /accordion-heading -->

          <!-- CONTENT -->
          <div id="serviceRight<?php echo $countRight; ?>" class="accordion-body collapse">
            <div class="accordion-inner">

              <?php
              while(has_sub_field('sr_right_content_copy')) :
                if( get_row_layout() == 'sr_sub_price' ) {

                  if(get_sub_field('sr_service_detail')) : ?>

                  <ul>

                  <?php
                  while(has_sub_field('sr_service_detail')) :
                    $rightsub_text = get_sub_field('sr_sub_header');
                    $right_price = get_sub_field('sr_price');
                    ?>

                    <li>
                      <h3>
                        <?php
                        if( $rightsub_text ){ echo $rightsub_text; }
                        if( $right_price ){ echo ' <span class="price">'. $right_price.'</span>'; }
                        ?>
                      </h3>
                    </li>

                  <?php endwhile; ?>

                  </ul>

                  <?php
                endif;

              } /* sub_price */


              elseif( get_row_layout() == 'sr_block_text' ) { ?>

                <p><?php echo get_sub_field('sr_block_text'); ?></p>

              <?php }
            endwhile;
            ?>

            </div><!-- /accordion-inner -->
          </div><!-- /accordion-body -->

        </div><!-- /accordion-group -->


      <?php
      $countRight++;
    endwhile; ?>

  </div><!-- /accordionRight -->

</div><!-- /span6 -->
<?php endif; ?>