<?php
/*
Template Name: Salon


$ts_owner_header
$ts_owner_text
$ts_staff_members
$ts_staff_header
$ts_staff_text
*/
get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="pg-content">
	<div class="container" id="about">
		<div class="row">
			<div class="span12">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="row-fluid">
				<div class="span5">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/jacksonholehairsalon.jpg" width="350" alt="Hair Salon in Jackson Hole Wyoming" />

				</div>
				<div class="span7">
				<h2 style="margin-top: 20px;" class="blk">About</h2>
				<p>Located in Jackson, Wyoming, Champ&uacute; Salon is one of the area's premier spots for professional haircare and beauty treatments. Established in 2005 as Mimi Hair and Body Care, the salon operated out of Blooms & Greens Flower Shop, providing both beauty services and flowers to the Jackson area. The popularity of the salon eventually led to the conversion of the space into a full-service salon and in 2011 current owner Shara Buday, a member of the original staff, bought the salon from her sister and rebranded it as Champ&uacute; Salon. Under Shara's visionary ownership Champ&uacute; has continued to grow into one of Jackson's most fashionable salons, offering clientele the latest in hair and beauty trends within the unique mountain locale. </p>
				</div></div>
			</div><!-- /span -->
		</div><!-- /row -->
	</div><!-- /container -->
	<div id="staff"></div>
	<div class="full-width section">
		<div class="container">
			<div class="row">
				<div class="span12">
					<h2>Staff</h2>

					<div class="row-fluid">
						<!--
						<div class="span4">
							<img src="/wp-content/themes/tmbr/img/stylist.jpg" alt=""/>
						</div>
						-->

						<div class="span12">
							<h3 style="font-size: 28px;">Shara Buday, Owner</h3>
							<p>As the salon owner and founder of the Champ&uacute; brand, it is Shara's vision and style that define the identity of Champ&uacute; Salon. With a natural gift for color and a passion for styling, Shara has been helping clients achieve their ideal look since she joined the industry in 2001.</p>
							<p>After developing her career in Boston for four years Shara moved to Jackson in 2005 to become an original staff member of the salon, then known as Mimi Hair and Body Care. In 2011 Shara bought the salon from her sister and established Champ&uacute; Salon, with a goal of becoming the area's premier provider of haircare and beauty.</p>
							<p>Today, Shara's vision continues to grow the salon and has allowed her to achieve her dream of owning a salon brand that is completely her own, while continuing to provide clients with the excellent service they've come to expect.</p>
						</div>
					</div>

					<div class="row-fluid">



						<div class="span5" style="text-align: center;">
							<!-- <img src="/wp-content/themes/tmbr/img/stylist2.jpg" style="margin-bottom: 20px;" alt=""/> -->
						<h3>Sarah Duke, <span style="font-weight: normal;">Stylist</span></h3>
						<p>Sarah decided to pursue her dream of becoming a hair stylist in 2011, when she enrolled at Paul Mitchell The School in Denver, CO. Graduating in 2012 as a specialist in cutting and color, Sarah and her husband Tyler moved back to Jackson, where Sarah has been a resident for most of her life. As a true Jackson local, Sarah enjoys many of the outdoor activities the area has to offer with her husband and two dogs, Sophie and Gracie. </p>
						</div>

						<div class="span5 offset2" style="text-align: center;">
							<h3>Athena Suniga, <span style="font-weight: normal;">Stylist</span></h3>
							<p>Athena began her career in the beauty industry as a makeup artist. Her love of makeup and background as an artist allowed Athena to immediately excel at makeup styling. Athena built on her natural skill by attending professional classes in Chicago. After two years of freelance styling for weddings and special events Athena decided to become a licensed hair stylist. Upon graduating from Styles School of Cosmetology Athena moved to Jackson from her home town of Lander, Wyoming, and joined the Champu team. In addition to makeup styling, Athena's favorite work is doing up-dos and bridal styles.</p>
						</div>					</div>



				</div><!--/span12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /full-width -->


						<?php //edit_post_link( __( 'Edit'), '', '' ); ?>

		<?php endwhile; ?>

</div><!-- /pg-content -->

<?php get_footer(); ?>