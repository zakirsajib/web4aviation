<div class="footer row-fluid">
		<div class="footer-inner container">
		  	<div class="span3 col1">
		  		<?php if ( is_active_sidebar( 'f_sidebar_one' ) ) : ?>
		        	<?php dynamic_sidebar( 'f_sidebar_one' );  ?>
		        <?php endif;?>
		  	</div>
		  	<div class="span3 col2">
		  		<?php if ( is_active_sidebar( 'f_sidebar_two' ) ) : ?>
		        	<?php dynamic_sidebar( 'f_sidebar_two' );  ?>
		        <?php endif;?>
		  	</div>
		  	<div class="span3 col3">
		  		<?php if ( is_active_sidebar( 'f_sidebar_three' ) ) : ?>
		        	<?php dynamic_sidebar( 'f_sidebar_three' );  ?>
		        <?php endif;?>
		  	</div>
		  	<div class="span3 copyright">
		  		<?php if ( is_active_sidebar( 'f_sidebar_four' ) ) : ?>
		        	<?php dynamic_sidebar( 'f_sidebar_four' );  ?>
		        <?php endif;?>
		  	</div>
		  	
		  	
		  	
		  	
		 </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-40384514-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer();?>
</body>
</html>