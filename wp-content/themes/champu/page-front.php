<?php
/*

Template Name: Under Construction

*/

get_header('construction'); ?>

<div class="container" >
<div class="row">
<div class="span8 offset2" >
<h1>Champ&uacute; Salon</h1>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<?php the_content(); ?>
	<?php endwhile; ?>
</div>
</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-13056552-39', 'champusalonjh.com');
  ga('send', 'pageview');

</script>
</body>
</html>