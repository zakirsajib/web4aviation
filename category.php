<?php 
get_header();
?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				    
<div class="top-default-img" style="background:url('<?php echo get_template_directory_uri(); ?>/images/header-img-page.jpg') no-repeat center top; height:349px; width:100%;"></div>
					        			       
	<div class="clearfix"></div>
	<div class="category-container row-fluid">
		        	<div class="row-fluid">
		        		<div class="container">
		        		<div class="breadrcrumbs">
		        			<p><a href="<?php echo home_url();?>">Home</a> / Category: <?php single_cat_title(); ?></p>
		        		</div>
		        		</div>
		        	</div>
				        
				  <div class="container">
				      <?php while(have_posts()) : the_post();?>
				        <div class="entry-content">
				        	<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				        	
				        	<div class="meta">
		        	Posted on <?php the_time(get_option( 'date_format' )) ?> | By <?php echo get_the_author(); ?> | Filed as: <?php the_category(', ') ?> <?php the_tags(); ?> | <?php comments_number( 'no comments', 'one response', '% responses' ); ?>
		        </div>
				        	
				        	
				        	<?php the_excerpt();?>
				        </div>
				      <?php endwhile;?>	
				</div>
	</div> 
			    	
</div>
<?php get_footer();?>