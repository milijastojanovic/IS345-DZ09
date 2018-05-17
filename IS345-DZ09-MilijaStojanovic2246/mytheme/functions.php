<?php 
	
function myTheme_resources() {
				
	wp_enqueue_style('style', get_stylesheet_uri());
			
}
		
add_action('wp_enqueue_scripts', 'myTheme_resources');
		


// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
));

// Add Our Widget Locations
function ourWidgetsInit() {
	
	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1'
	));
	
}

add_action('widgets_init', 'ourWidgetsInit');


?>