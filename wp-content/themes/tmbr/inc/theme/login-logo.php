<?php

// Adds TMBR logo to login page
	add_action('login_head', 'tmbr_login_head');
	function tmbr_login_head() {
		echo "
		<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/img/tmbr-logo.png') no-repeat scroll center top transparent;
			height: 160px;
			width: 140px;
			margin: 0 auto;
		}
		</style>
		";
}	

?>