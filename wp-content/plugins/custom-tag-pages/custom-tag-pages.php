<?php
/*
Plugin Name: Custom Tag Pages
Description: Adds tags functionality to pages.
*/

/*
 * Add the 'post_tag' taxonomies, which is the name of the existing taxonomies
 * used for tags the Post type 'page'.
 */
if ( ! function_exists( 'customtagpages_register_taxonomy' ) ) {
	function customtagpages_register_taxonomy() {
		// Register tag taxonomy for pages.
		register_taxonomy_for_object_type( 'post_tag', 'page' );
	}

	add_action( 'init', 'customtagpages_register_taxonomy' );
}
?>