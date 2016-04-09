<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta name="google-site-verification" content="uXNoXDCjXSCwZXZFZcvOTHm1O66qZUFmyLVlepKdQ8k" />

	<title><?php wp_title(' | ', true, 'right'); ?></title>


	<!-- >> FONTS -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<!-- >> FAVICON -->
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/salon-favicon.ico">

	<!-- >> BOOTSTRAP -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/bootstrap/bootstrap.min.css">
	<!-- >> FLEXSLIDER -->
    <link rel="stylesheet" href="/wp-content/themes/champu/js/flexslider/flexslider.css" type="text/css">

	<!-- >> THEME STYLESHEET -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<!-- >> RESPONSIVE STYLES -->
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">


	<!-- >> LOAD JQUERY -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script> <!-- Pull jQuery locally if Google Fails -->

	<!-- >> PINGBACK -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrap">
	<div class="full-width" id="banner">
		<div class="container">
			<div class="row">
				<div class="span12">
				<h5><?php the_field('header_callout_text','option'); ?></h5>
				</div>
			</div>
		</div>
	</div>
	<!-- BEGIN HEADER -->
	<div id="header">

		<div class="container">
			<div class="row">
				<?php
				$logo = get_field('global_logo','option');
				if($logo) {
					$logo_img = $logo['sizes']['medium'];
				}
				else {
					$logo_img = '/wp-content/themes/tmbr/img/champu_logo.png';
				}
				?>
				<div class="span5">
					<a href="/" class="logo">
					<img src="<?php echo $logo_img; ?>" width="250" alt="Champu Salon - Jackson Hole" />
					</a>
				</div><!-- /span5 -->

				<div class="span7">
					<?php wp_nav_menu( array( 'theme_location' => 'main-navigation', 'container' => 'nav', 'menu_class' => 'nav' ) ); ?>
				</div><!-- /span7 -->

			</div><!-- /row  -->
		</div><!-- /container -->

	</div><!-- /#HEADER -->








