<div class="search-form">	  	
	<form method="get" class="form-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="input-append">
			<input type="text" class="span10 search-query" name="s" required="required" placeholder="<?php esc_attr_e( 'Search term here...', THEMENAME ); ?>" />
			<!-- <input type="submit" class="btn" name="submit" value="<?php esc_attr_e( '', THEMENAME ); ?>" /> -->
		
		<button type="submit" class="btn" id="search-btn"><i class="icon-search icon-black"></i></button>
		</div>
	</form>
</div><!-- #search-form -->
