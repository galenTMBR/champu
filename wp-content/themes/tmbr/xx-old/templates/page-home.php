<?php
/*

Template Name: Home


$home_slideshow
$home_callout_text !! add callout link
$b1_header
$b1_text
$b2_header
$b2_text
$b3_header
$b3_text
*/ ?>


<?php get_header(); ?>


<div class="pg-content">
<div class="container">

<?php get_template_part( 'partials/header-content' );
?>



	<div class="row">
		<div class="span12 h-rule"></div>
	</div>
<hr/>
	<div class="row">
		<div class="span12">
			<h2 style="text-align: center; font-size: 29px; margin-bottom: 0;"><a href="http://champusalonjh.com/wp-content/uploads/2014/10/top-100-salons.pdf" target="_blank" style="color: #333;">Champ&uacute; was named one of the top 100 Salons in America by Elle Magazine!</a></h2>
		</div>
	</div>

	<div class="row">
		<div class="span12 h-rule" style="margin-bottom: 40px;"></div>
	</div>

	<!-- BUCKETS -->
	<div class="row buckets">
		<div class="span4">
			<h2><a href="/salon/">The Salon</a></h2>
			<p>Established in 2005 and located in Jackson, Wyoming, Champ&uacute; Salon is one of the area's premier spots for professional haircare and beauty treatments.</p>
			<p><a href="/salon/">Learn More.</a></p>
		</div>

		<div class="span4">
			<h2><a href="/services/">Services</a></h2>
			<p>From every day to wedding day, find the service that's perfect for you!</p>
			<p><a href="/services/">Click here to view our full list of offerings.</a></p>
		</div>

		<div class="span4">
			<h2><a href="/contact/">Make an Appointment</a></h2>
			<p>If you would like to make an appointment, please give us a call at <strong><a href="tel://1-307-739-4646">307.739.4646</a></strong>.</p>
			<p>We are located in Buffalo Junction at 1160 Alpine Lane, Suite 1G. </p>

		</div>
	</div><!-- /buckets -->

</div>
</div>

<?php get_footer(); ?>