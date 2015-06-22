<?php 
get_header();
?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php while(have_posts()) : the_post();?>    
			        
			        <?php if(get_field('page_default_image')):?>
			        	<div class="top-default-img" style="background:url('<?php the_field('page_default_image')?>') repeat-x center top; height:349px; width:100%;">
			        	</div>
			        <?php else:?>
			        	<div class="top-default-img" style="background:#133B5E; height:349px; width:100%;"></div>
			        <?php endif;?>
			 		
			 		
			 		<div class="single-header-descr">
			        	<?php if(get_field('short_descriptions_portfolio')):?>
			        		<div id="descr"><?php the_field('short_descriptions_portfolio')?></div>
			        	<?php endif;?>
			        	
			        </div>
			 			        			  		
			       
			       <div class="clearfix"></div>
			       <div class="single-portfolio-container row-fluid">
				        <div class="row-fluid">
							<div class="container">
								<div class="breadrcrumbs">
									<p><a href="<?php echo home_url();?>">Home</a> / <a href="portfolio">Portfolio</a> / <?php the_title()?></p>
								</div>
							</div>
						</div>
				        
				        <div class="container">
				        		<?php the_content();?>
					    </div>
				   </div> 
			    <?php endwhile;?>	
	</div>
<?php get_footer();?>