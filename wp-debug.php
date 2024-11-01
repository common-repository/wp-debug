<?php
/*
Plugin Name: WP-Debug
Plugin URI: http://www.siolon.com/2007/wp-debug/
Description: Allows WordPress debugging through the Krumo application.  Visit the <a href="http://kaloyan.info/krumo/docs/">Krumo documentation</a> for more information.
Version: 1.0
Author: Chris Poteet
Author URI: http://www.siolon.com/
*/

function publish_krumo() {
	global $user_ID, $wp_query, $wp;
	if ( $user_ID ) {
		include ('krumo/class.krumo.php');
		// Prints variables; can also use krumo::dump($wp_query, $wp);
		krumo($wp_query, $wp);
		// Print a debug back trace (uncomment if you want to use)
	 	// krumo::backtrace();
	 	// Print all the included/required files
		krumo::includes();
	 	// Print all included functions
	 	krumo::functions();
	 	// Print all declared classes
	 	krumo::classes();
		// Print HTTP headers
		krumo::headers();
	 	// Print all defined constants
	 	krumo::defines();
		// Print current cookies
	 	krumo::cookie();
		// Print values in $_SERVER array
		krumo::server();
		// Print values in the $_ENV array
		krumo::env();
		// Prints values from the $_SESSION array
		krumo::session();
		// Prints values from the $_POST array
		krumo::post();
		// Prints values from the $_GET array
		krumo::get();
		// Prints values from the $_REQUEST array
		krumo::request();
		// Prints php.ini values
		krumo::phpini();
}
	else {
	}
}

function krumo_styles() {
	global $user_ID;
	if ( $user_ID ) {
	 	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/wp-debug/krumo.css"></link>' . "\n";
	}
	else {
	}
}

add_action('wp_footer', 'publish_krumo');
add_action('wp_head', 'krumo_styles');

?>