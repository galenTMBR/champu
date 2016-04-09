<?php
/*
Template Name: Products
*/ 
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="pg-content">	
	
	<div class="container">
		<div class="row">
			<div class="span12">				
				<h1><?php the_title(); ?></h1>	
				
				
				<h2 style="color: #000; margin-bottom: 10px;">Styling</h2>
				<?php the_field('styling_content'); ?>
				<div class="row-fluid prod-logos">
				<?php if( get_field('products')): while( has_sub_field('products')) : ?> 
				<div class="span4"><img src="<?php the_sub_field('product_logo');?>" class="<?php the_sub_field('unique_id');?>" alt="<?php the_sub_field('product_name');?> - Hair Care Products" /></div>
				<?php endwhile; endif; ?> 
				</div>
				
				<div class="accordion" id="accordionProducts">
					<?php if( get_field('products')): while( has_sub_field('products')) : ?> 
					
					<div class="accordion-group">
					
						<div class="accordion-heading">
							<h2><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionProducts" href="#<?php the_sub_field('unique_id');?>"><?php the_sub_field('product_name');?></a></h2>
						</div><!-- /accordion-heading -->
	
						<div id="<?php the_sub_field('unique_id');?>" class="accordion-body collapse">
							<div class="accordion-inner">
								<?php the_sub_field('product_info');?>
							</div><!-- /accordion-inner -->
						</div><!-- /accordion-body -->
		
					</div><!-- /accordion-group -->				
				
					<?php endwhile; endif; ?> 
				</div>
				<h2 style="color: #000; margin-bottom: 10px; margin-top: 40px;" id="color">Color</h2>
				<?php the_field('color_content'); ?>
				<div class="row-fluid prod-logos">
				<?php if( get_field('color_products')): while( has_sub_field('color_products')) : ?> 
				<div class="span4"><img src="<?php the_sub_field('product_logo');?>" class="<?php the_sub_field('unique_id');?>" alt="<?php the_sub_field('product_name');?> - Hair Care Products" /></div>
				<?php endwhile; endif; ?> 
				</div>
				
				<div class="accordion" id="accordionProducts">
					<?php if( get_field('color_products')): while( has_sub_field('color_products')) : ?> 
					
					<div class="accordion-group">
					
						<div class="accordion-heading">
							<h2><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordionProducts" href="#<?php the_sub_field('unique_id');?>"><?php the_sub_field('product_name');?></a></h2>
						</div><!-- /accordion-heading -->
	
						<div id="<?php the_sub_field('unique_id');?>" class="accordion-body collapse">
							<div class="accordion-inner">
								<?php the_sub_field('product_info');?>
							</div><!-- /accordion-inner -->
						</div><!-- /accordion-body -->
		
					</div><!-- /accordion-group -->				
				
					<?php endwhile; endif; ?> 
				</div>
				
				
				<?php // get_template_part( 'inc/content', 'products' ); ?>
				
			</div><!-- /span -->
		</div><!-- /row -->
	
	</div>
						
						<!-- <?php edit_post_link( __( 'Edit'), '', '' ); ?> -->
			
		<?php endwhile; ?>

</div><!-- /pg-content -->

<?php get_footer(); ?>