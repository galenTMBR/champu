
<div id="footer" class="footer">
<div class="container">
	<div class="row">
		<div class="span6">
			<p>&copy; 2014, Champu Salon. All Rights Reserved.</p>
		</div>
		<div class="span6">
			<p style="text-align: right;"><a href="tel://1-307-739-4646" class="tel">307.739.4646 </a> 
			<a href="https://www.facebook.com/ChampuSalon" class="fb" target="_blank"><i class="fa fa-fw fa-facebook"></i></a>
			<a href="http://www.pinterest.com/ChampuSalonJH/" class="pinterest" target="_blank"><i class="fa fa-fw fa-pinterest"></i></a>
			<a href="https://plus.google.com/+ChampuSalonJackson/posts" class="google" target="_blank"><i class="fa fa-fw fa-google-plus"></i></a></p>
		</div>
	</div><!-- /row -->
</div>
</div><!-- /footer -->
</div><!-- /#wrap -->
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-13056552-39', 'champusalonjh.com');
  ga('send', 'pageview');

</script>
<!-- >> SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/bootstrap/bootstrap.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>
<script src="/wp-content/themes/champu/js/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider({
	    controlNav: false,
	    prevText: "",
	    nextText: "",
	    slideshowSpeed: 3000
    });
  });
  $('.collapse').on('show', function () {
   $(this).parent().find('h2').addClass('shown');
})
 </script>
</body>
</html>