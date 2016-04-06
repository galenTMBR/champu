<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<!-- == Web Design By : http://www.WeAreTMBR.net == -->
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	
	
	<title><?php bloginfo('name'); wp_title( '|', true, 'left' ); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
  	<meta name="author" content="VR Interactive Media LLC" />
  	
  	<link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.png"/>
	
	<!-- == STYLESHEETS == -->
	<link href='http://fonts.googleapis.com/css?family=Quintessential|Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic|Forum' rel='stylesheet' type='text/css'>


			<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/library/css/bootstrap.css" type="text/css" />

	<!-- == LOAD JQUERY == -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script> <!-- Pull jQuery locally if Google Fails -->
	
	<style>
	body {
	background: url('/wp-content/themes/tmbr/css/img/background.jpg');
	font-family: 'Forum',cursive;
	text-align:center;
	}
	
h1,
h2,
h3,
h4,
h5 {
	font-family: 'sanvito-pro',serif;
	}
	
h1 {
	font-weight: normal;
	font-size: 72px;
	color: #666;
	text-align: center;
	margin: 50px 0 30px;
	}
	
p {font-size: 16px;}

a {
	transition: all .5s ease;
	-moz-transition: all .5s ease; /* Firefox 4 */
	-webkit-transition: all .5s ease-in-out; /* Safari and Chrome */
	-o-transition: all .5s ease-in-out; /* Opera */
	text-decoration: none;	
}

.clear {
	clear: both;	
}

	
	
	</style>
	
	
	<!-- == NON-DEPENDANT JAVASCRIPT == -->
	<script type="text/javascript" src="js/modernizr.w.shiv.js"></script>
	
	<!-- == PINGBACK ==-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<script type="text/javascript" src="//use.typekit.net/tpb7uog.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
	