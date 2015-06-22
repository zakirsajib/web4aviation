$j = jQuery.noConflict();		
		$j( document ).ready(function() {	
		 								
				$j('.form-submit input#submit').addClass('btn');
				
				if ($j.browser.msie && $j.browser.version == 10) {
				  	$j("html").addClass("ie10");
				}
				
				$j('.isotope-inner a.vc_read_more').addClass('btn read-more');
});
