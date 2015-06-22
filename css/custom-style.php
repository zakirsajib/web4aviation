<?php global $data; ?>

<style>

h1, h2, h3, h4, h5, h6{
	color: <?php echo $data['title_colorpicker']; ?>;
}

.post-title a:hover, 
.post-title a:focus{
	color: <?php echo $data['title_hover_colorpicker']; ?>;
}


.footer{
	background: <?php echo $data['footer_background']; ?>;
}


.navbar .nav > li > a{
	color: <?php echo $data['menu_colorpicker']; ?>;
}


.read-more{
	background: <?php echo $data['read_background_colorpicker']; ?>;
	color: <?php echo $data['read_colorpicker']; ?>;
}

.read-more:hover{
	background: <?php echo $data['read_background__hover_colorpicker']; ?>;
}

/* Custom CSS */
<?php echo $data['custom_css'] ?>

</style>