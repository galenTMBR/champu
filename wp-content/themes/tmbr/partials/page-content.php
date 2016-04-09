<?php

  if( have_rows('page_content') ) :


    while ( have_rows('page_content') ) : the_row();


      if( get_row_layout() == 'callout_text' ) { get_template_part( 'partials/pc/callout-text' ); }

      elseif( get_row_layout() == 'content_buckets' ) { get_template_part( 'partials/pc/content-buckets' ); }

      elseif( get_row_layout() == 'staff' ) { get_template_part( 'partials/pc/staff' ); }

      elseif( get_row_layout() == 'services' ) { get_template_part( 'partials/pc/services' ); }

      elseif( get_row_layout() == 'products' ) { get_template_part( 'partials/pc/products' ); }


      endwhile;


  endif;