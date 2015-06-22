<!DOCTYPE html>
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) | !(IE 9) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width">
	<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	
	<?php global $data; ?>
	
	
	<?php if($data['favicon']): ?>
	<link rel="shortcut icon" href="<?php echo $data['favicon']; ?>" type="image/x-icon" />
	<?php endif; ?>

	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    	<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->


<?php wp_head();?>
<?php get_template_part('css/custom', 'style');?>
</head>
		
<body <?php body_class(); ?>>

<div class="header-wrapper row-fluid"> 
				
		

 
  	<div class="container">	
		<div class="logo span4">
				<a href="<?php echo home_url();?>" title="Click here to go to home page"><img src="<?php echo $data['media_upload_35']; ?>" alt="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>"/></a>
		</div>
  	
 		
 		
 	
	 	<div class="navbar navbar-inverse navbar-relative-top span8">
	        <div class="navbar-inner">
	            <div class="span12">
	                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </a>
					<?php wp_nav_menu( array( 
						'menu' => 'main-menu',
						'theme_location' => 'Primary', 
						'menu_id' => 'main-menu', 
						'menu_class' => 'nav', 
						'container_id' =>'',
						'container_class' =>'top-menu nav-collapse collapse',
						'fallback_cb' => 'wp_page_menu'
				));?>	
				
				</div>
	        </div>
	    </div>
  
  </div> <!-- container -->
  
</div> <!-- header wrapper -->