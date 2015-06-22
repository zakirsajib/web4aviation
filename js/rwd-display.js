jQuery = jQuery.noConflict();		
		jQuery( document ).ready(function() {	

// viewport stuff
var targetWidth = 980;
var deviceWidth = 'device-width';
var viewport = jQuery('meta[name="viewport"]');

// check to see if local storage value is set on page load
localStorage.isResponsive = (localStorage.isResponsive == undefined) ? 'true' : localStorage.isResponsive;

var showFullSite = function(){    
    viewport.attr('content', 'width=' + targetWidth);  
    
    if(!jQuery('.rwd-display-options #view-responsive').length){
        jQuery('.rwd-display-options').append('<span id="view-responsive">View Mobile Optimized</span>');
    }    
    
    localStorage.isResponsive = 'false';
}

var showMobileOptimized = function(){
    localStorage.isResponsive = 'true';
    viewport.attr('content', 'width=' + deviceWidth);
}

// if the user previously chose to view full site, change the viewport
if(Modernizr.localstorage){
    if(localStorage.isResponsive == 'false'){
        showFullSite();
    }
}    

jQuery("#view-full").on("click", function(){
    showFullSite();
});

jQuery('.rwd-display-options').on("click", "#view-responsive", function(){
    showMobileOptimized();
});


});