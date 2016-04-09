

<?php

$type = get_field('hc_header_type');

if($type == 'slideshow') { get_template_part('partials/hc/slideshow'); }
elseif($type == 'single_img') { get_template_part('partials/hc/single-img'); }
elseif($type == 'split_img') { get_template_part('partials/hc/split-img'); }
elseif($type == 'map') { get_template_part('partials/hc/map'); }
?>
