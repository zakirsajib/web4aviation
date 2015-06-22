<?php 
/*Template Name: Blank template*/
get_header();
?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<?php if ( have_posts() ) : ?>
				<?php while(have_posts()) : the_post();?>    
			        
			        <?php if(get_field('page_default_image')):?>
			        	<div class="top-default-img" style="background:url('<?php the_field('page_default_image')?>') repeat-x center top; height:349px; width:100%;">
			        	</div>
			        <?php else:?>
			        	<div class="top-default-img" style="background:url('<?php echo get_template_directory_uri(); ?>/images/header-img-page.jpg') no-repeat center top; height:349px; width:100%;"></div>
			        <?php endif;?>
			 		
			 		
			 		<div class="header-descr">
			        	<?php if(is_page('portfolio')):?>
			        		<p id="descr"><?php the_field('short_descriptions_portfolio')?></p>
			        	<?php else:?>
			        		<?php if(get_field('Header_title')):?>
			 					<p><?php the_field('Header_title')?></p>
			 				<?php endif;?>
			        		<?php if(get_field('short_descriptions')):?>
			        			<p id="descr"><?php the_field('short_descriptions')?></p>
			        		<?php endif;?>
			        	<?php endif;?>
			        	
			        </div>
			 			        
			       
			       <div class="clearfix"></div>
				    	<div class="page-container row-fluid" id="blank">
				        	<div class="container">
					        	<div class="breadrcrumbs">
					        		<p><a href="<?php echo home_url();?>">Home</a> / <?php the_title()?></p>
					        	</div>
				        	
				        		<?php the_content();?>
					   	 	</div>
				   		</div>
			    <?php endwhile;?>
		<?php else : ?>
				<?php get_template_part('not', 'found')?>
		<?php endif; // end have_posts() check ?>	
	</div>
<?php get_footer();?>