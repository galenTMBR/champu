<section class="product-content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <?php
        if(get_sub_field('product_category')) :
          $catCount = 1;
          while(has_sub_field('product_category')) :

            $header = get_sub_field('prodc_header');
            $content = get_sub_field('prodc_content');

            ?>
            <div class="product-category">

              <h2 class="header"><?php echo $header; ?></h2>
              <?php echo $content; ?>
              <?php get_template_part( 'partials/pc/products/logos' ); ?>

              <?php if(get_sub_field( 'prod_products' )) : $brandCount = 1; ?>
              <div class="accordion" id="accordion<?php echo $catCount; ?>">
              <?php while( has_sub_field('prod_products')) :
                $brand = get_sub_field('product_brand');
                $descript = get_sub_field('product_description');
              ?>

              <div class="accordion-group">

                <div class="accordion-heading">
                  <h2>
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion<?php echo $catCount; ?>" href="#brand<?php echo $catCount; echo $brandCount; ?>"><?php echo $brand; ?></a>
                  </h2>
                </div><!-- /accordion-heading -->

                <div id="brand<?php echo $catCount; echo $brandCount; ?>" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <?php echo $descript; ?>
                  </div><!-- /accordion-inner -->
                </div><!-- /accordion-body -->

              </div><!-- /accordion-group -->

              <?php $brandCount++; endwhile; ?>
              </div><!-- /accordion -->
            <?php endif; ?>

            </div><!-- /product-category -->
          <?php
          $catCount++;
          endwhile;
        endif; ?>
      </div><!-- /span12 -->
    </div><!-- /row -->
  </div><!-- /container -->
</section>