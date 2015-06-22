<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{
		//Access the WordPress Categories via an Array
		$of_categories 		= array();  
		$of_categories_obj 	= get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
		$categories_tmp 	= array_unshift($of_categories, "Select a category:");    
	       
		//Access the WordPress Pages via an Array
		$of_pages 			= array();
		$of_pages_obj 		= get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp 		= array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select 	= array("one","two","three","four","five"); 
		$of_options_radio 	= array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
		//Sample Homepage blocks for the layout manager (sorter)
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_one"		=> "Block One",
				"block_two"		=> "Block Two",
				"block_three"	=> "Block Three",
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"block_four"	=> "Block Four",
			),
		);


		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		//Background Images Reader
		$bg_images_path = get_stylesheet_directory(). '/images/bg/'; // change this to where you store your bg images
		$bg_images_url = get_template_directory_uri().'/images/bg/'; // change this to where you store your bg images
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		            	natsort($bg_images); //Sorts the array into a natural order
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$other_entries 		= array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();

$of_options[] = array( 	"name" 		=> "Header Settings",
						"type" 		=> "heading"
				);

$of_options[] = array( 	"name" 		=> "Logo",
						"desc" 		=> "Upload logo.",
						"id" 		=> "media_upload_35",
						// Use the shortcodes [site_url] or [site_url_secure] for setting default URLs
						"std" 		=> "",
						"type" 		=> "upload"
				);
				
$of_options[] = array( 	"name" 		=> "Favicon",
						"desc" 		=> "Upload favicon.",
						"id" 		=> "favicon",
						// Use the shortcodes [site_url] or [site_url_secure] for setting default URLs
						"std" 		=> "",
						"type" 		=> "upload"
				);


					
					
					

$of_options[] = array( 	"name" 		=> "Home Settings",
						"type" 		=> "heading"
				);

$of_options[] = array( 	"name" 		=> "Button Label",
						"desc" 		=> "Type the button label",
						"id" 		=> "btn_label_one",
						"std" 		=> "",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Button URL",
						"desc" 		=> "Type the button url",
						"id" 		=> "btn_one_url",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Button Label",
						"desc" 		=> "Type the button label",
						"id" 		=> "btn_label_two",
						"std" 		=> "",
						"type" 		=> "text"
				);

$of_options[] = array( 	"name" 		=> "Button URL",
						"desc" 		=> "Type the button url",
						"id" 		=> "btn_two_url",
						"type" 		=> "text"
				);




// Styling Options

$of_options[] = array( 	"name" 		=> "Styling Options",
						"type" 		=> "heading"
				);
				

								
$of_options[] = array( 	"name" 		=> "Menu color",
						"desc" 		=> "Select main menu color.",
						"id" 		=> "menu_colorpicker",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
					); 

$of_options[] = array( 	"name" 		=> "Title (h1,h2...) color",
						"desc" 		=> "Select title color.",
						"id" 		=> "title_colorpicker",
						"std" 		=> "#134369",
						"type" 		=> "color"
					); 


$of_options[] = array( 	"name" 		=> "Title (h1,h2...) Hover color",
						"desc" 		=> "Select title hover color on blog page.",
						"id" 		=> "title_hover_colorpicker",
						"std" 		=> "#ed1c24",
						"type" 		=> "color"
					); 

					

$of_options[] = array( 	"name" 		=> "Read more button color",
						"desc" 		=> "Select read more button color.",
						"id" 		=> "read_colorpicker",
						"std" 		=> "#ffffff",
						"type" 		=> "color"
					); 


$of_options[] = array( 	"name" 		=> "Read more button Background color",
						"desc" 		=> "Select read more button background color.",
						"id" 		=> "read_background_colorpicker",
						"std" 		=> "#134369",
						"type" 		=> "color"
					); 

$of_options[] = array( 	"name" 		=> "Read more button background Hover color",
						"desc" 		=> "Select read more button background hover color.",
						"id" 		=> "read_background__hover_colorpicker",
						"std" 		=> "#ed1c24",
						"type" 		=> "color"
					); 

$of_options[] = array( 	"name" 		=> "Footer Background Color",
						"desc" 		=> "Pick a background color for the footer",
						"id" 		=> "footer_background",
						"std" 		=> "#dadada",
						"type" 		=> "color"
				);



// Custom css

$of_options[] = array( "name" => "Custom CSS",
					"type" => "heading");

$of_options[] = array( "name" => "Advanced CSS Customizations",
					"desc" => "",
					"id" => "advanced_css_intro",
					"std" => "<h3 style='margin: 0;'>Advanced CSS Customizations</h3><p style='margin-bottom:0;'>Paste your css code. Do not include <stlye></stlye> tags or any html tag in this field.</p>",
					"icon" => true,
					"type" => "info");

$of_options[] = array( "name" => "CSS Code",
                    "desc" => "Any custom CSS from the user should go in this field, it will override the theme CSS",
                    "id" => "custom_css",
                    "std" => "",
                    "type" => "textarea");



				
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}//End function: of_options()
}//End chack if function exists: of_options()
?>
