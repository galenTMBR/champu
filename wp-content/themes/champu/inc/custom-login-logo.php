<?php

add_action("login_head", "my_login_head");
function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('".get_bloginfo('template_url')."/logo.png') no-repeat scroll center top transparent;
		height: 80px;
		width: 300px;
	}
	</style>
	";
}	

?>