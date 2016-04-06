<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<!-- == Web Design By : http://www.WeAreTMBR.net == -->
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	
	
	<title><?php bloginfo('name'); wp_title( '|', true, 'left' ); ?></title>

	
  	<meta name="author" content="Galen Strasen" />
  	
  	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.png"/>
	
	<!-- == STYLESHEETS == -->
	<link href='http://fonts.googleapis.com/css?family=Quintessential|Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Forum' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/library/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/style.css" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/wp-content/themes/champu/js/flexslider/flexslider.css" type="text/css">
	<link href="/wp-content/themes/champu/library/css/bootstrap.css" rel="stylesheet">	
	<link rel="stylesheet" href="/wp-content/themes/champu/css/style.css" type="text/css" />

	<!-- == LOAD JQUERY == -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script> <!-- Pull jQuery locally if Google Fails -->
	
	<!-- == NON-DEPENDANT JAVASCRIPT == -->
	<script type="text/javascript" src="js/modernizr.w.shiv.js"></script>
	
	<!-- == PINGBACK ==-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	<div class="container">

	<!-- HEADER -->
	<div class="row header">
		<div class="span5">
			<a href="/" class="logo">
			<img src="/wp-content/themes/champu/images/champu_logo.png" width="250" alt="Champu Salon - Jackson Hole" />
			</a>
		</div>
		
		<div class="span7">
			<ul class="nav" style="font-family:'Source Sans Pro', sans-serif; font-size: 14px; font-weight: 200; text-transform: uppercase;">
				<li><a href="/salon/">Salon</a>
					
				</li>
				<li><a href="/services/">Services</a></li>
				<li><a href="/weddings/">Weddings</a></li>
				<li><a href="/looks/">Looks</a></li>
				<li><a href="/products/">Products</a></li>
				<li><a href="/contact/">Contact</a></li>
			</ul>
		</div>
	</div><!-- /header -->
	<!-- 
	<div class="row">
		<div class="span12 h-rule"></div>
	</div>
	-->