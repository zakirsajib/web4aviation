<?php 

get_header();
?>

<div class="top-default-img" style="background:url('<?php echo get_template_directory_uri(); ?>/images/header-img-page.jpg') no-repeat center top; height:349px; width:100%;"></div>


		<?php
			global $wp_query;
			if( is_search() ) {
				$args = array( 'posts_per_page' => -1, 'paged' => $paged );
				$args = array_merge( $args, $wp_query->query );
				query_posts( $args );
			}?>

<div class="search-container row-fluid">
	<div class="container">
			
		<?php if ( have_posts() ) : ?>
			<div class="search-query">
				<h1>Search Results for: <span class="keyword">"<?php echo get_search_query();?>"</span></h1>
			</div>

		
				
		<?php while (have_posts()) : the_post(); ?>
		
					<div class="entry-content">
						<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<?php $content = wpautop(get_the_content($post->ID));?>
							<?php if($content):?>
								<?php the_excerpt();?>
							<?php else:?>
								<h2 class="warning">No contents found yet! Please write some.</h2>
							<?php endif;?>	
					</div>
		<?php endwhile; ?>	
		
		
		</div>
	




		<?php else:?>

		<div class="container">		
			<div class="entry-content">
				<h1 class="title1"><?php _e( 'Nothing Found', '' ); ?></h1>
				<p class="title2"><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>	
				
				
				<div class="clearfix"></div>
				
				<div class="search-form">	  	
					<form method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div class="input-append container">
							<input type="text" class="span12 search-query" name="s" required="required" placeholder="<?php esc_attr_e( 'Search term here...', THEMENAME ); ?>" />
						<button type="submit" class="btn" id="search-btn"><i class="icon-search icon-black"></i></button>
						</div>
					</form>
				</div><!-- #search-form -->
			</div>
		</div>
		<?php endif; ?>					
		


<?php wp_reset_query();?>

</div>

</div>

<?php get_footer();?>