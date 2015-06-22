<?php 
get_header();
?>
<div class="blog-single-container row-fluid">
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
	
	<?php while(have_posts()) : the_post();?>   	 
        
        			<?php if(get_field('page_default_image')):?>
			        	<div class="top-default-img" style="background:url('<?php the_field('page_default_image')?>') no-repeat center top; height:349px; width:100%;">
			        	</div>
			        <?php else:?>
			        	<div class="top-default-img" style="background:url('<?php echo get_template_directory_uri(); ?>/images/header-img-page.jpg') no-repeat center top; height:349px; width:100%;"></div>
			        <?php endif;?>
			 		
			 		
       <div class="clearfix"></div>
       
       <div class="row-fluid">
			<div class="container">
				<div class="breadrcrumbs">
					<p><a href="<?php echo home_url();?>">Home</a> / <a href="airworthy">Airworthy</a> / <?php the_title()?></p>
				</div>
			</div>
		</div>
       
       <div class="clearfix"></div>
       <div class="container">
		    <div class="span8">
		        <?php if(has_post_thumbnail() ) : ?>
		  			<?php the_post_thumbnail('full', array('alt'=>get_the_title($post->ID),'class'=>"left", 'title'=>get_the_title($post->ID))); ?>
		  		<?php endif;?>
		        
		        <h2 class="post-title"><?php the_title()?></h2>
		        
		        <div class="meta">
		        	Posted on <?php the_time(get_option( 'date_format' )) ?> | By <?php echo get_the_author(); ?> | Filed as: <?php the_category(', ') ?> <?php the_tags(); ?> | <?php comments_number( 'no comments', 'one response', '% responses' ); ?>
		        </div>
		        
		        <?php the_content();?>
		  	</div>
        
        <div class="span3 offset1">
        	<?php get_sidebar('right');?>
        </div>
    <?php endwhile;?>	
    
    <div class="clearfix"></div>
    
    <?php content_nav(); ?>
    
    
    <div class="clearfix"></div>
    
     <div class="comments-area row-fluid">
		<?//php comments_template('', true ); ?>
	</div>    
    
    </div> <!-- end container -->
    </div>
</div>

<?php get_footer();?>


