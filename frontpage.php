<?php 
/*Template Name: Home*/
get_header();
?>
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	  	<?php if ( have_posts() ) : ?>
				  	<?php while(have_posts()) : the_post();?>
				    	<?php if(has_post_thumbnail() ) : 
			  				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
			  			<div class="top-img" 
			  				style="background :url('<?php echo $large_image_url[0]?>') no-repeat center top; height:650px; width:100%; -moz-background-size:cover; -webkit-background-size:cover; background-size:cover;"></div> <!-- end top-img -->
			  			<div class="call-to-action container">
			  				<h1><?php echo get_bloginfo('description');?></h1>
			  				<div class="buttons">
                    			<ul>
                    				<li><a href="<?php echo $data['btn_one_url']; ?>" class="btn btn-large btn-primary" id="portfolio-btn" type="button"><?php echo $data['btn_label_one']; ?></a></li>
                    				<li><a href="<?php echo $data['btn_two_url']; ?>" class="btn btn-large btn-primary" id="contact-btn" type="button"><?php echo $data['btn_label_two']; ?></a></li>
                    			</ul>
                			</div>
			  			</div>
			  			
			  			
			  			<?php else:?>
			  			<div class="top-img" style="background :url('http://placehold.it/1920x650') no-repeat center top; height:650px; width:100%;"></div>
						<div class="call-to-action container">
			  				<h1><?php echo get_bloginfo('description');?></h1>
			  				<div class="buttons">
                    			<ul>
                    				<li><a href="portfolio" class="btn btn-large btn-primary" id="portfolio-btn" type="button">SEE OUR WORK</a></li>
                    				<li><a href="contact" class="btn btn-large btn-primary" id="contact-btn" type="button">CONTACT US</a></li>
                    			</ul>
                			</div>
			  			</div>		  				
			  				
			  				
			  			<?php endif;?>
	</div> <!-- end post ID -->
	
	
	<div class="clearfix"></div>
	
				    
				    <div class="home-container row-fluid">
				    	<div class="container">
				    		<?php the_content();?>
				    	</div> <!-- end container -->
				   </div> 	
					<?php endwhile;?>
		<?php else : ?>
			<?php get_template_part('not', 'found')?>	
		<?php endif; // end have_posts() check ?>
		
	

<?php get_footer();?>