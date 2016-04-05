<?php

// Add a custom user role for client
$result = add_role( 'rjs_ezclient',  __(
'Client' ),
	array(
	'read' => true, // true allows this capability
	'edit_posts' => false, // Allows user to edit their own posts
	'edit_pages' => false, // Allows user to edit pages
	'edit_others_posts' => false, // Allows user to edit others posts not just their own
	'create_posts' => false, // Allows user to create new posts
	'manage_categories' => false, // Allows user to manage post categories
	'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
	'edit_themes' => false, // false denies this capability. User can’t edit your theme
	'install_plugins' => false, // User cant add new plugins
	'update_plugin' => false, // User can’t update any plugins
	'update_core' => false // user cant perform core updates
	)
);
register_activation_hook( __FILE__, 'add_roles_on_plugin_activation' );


// add column to admin page for all projects with client name
function rjs_ezclient_admin_columns( $taxonomies ) {
    $taxonomies[] = 'ezproject_clients';
    return $taxonomies;
}
add_filter( 'manage_taxonomies_for_ezproject_columns', 'rjs_ezclient_admin_columns' );


//Get all users with role EZ Client
function get_all_rjs_ezclients(){
	$ezclients = get_users( array('role' => 'rjs_ezclient' ) );
	// Loop through users and add each users display name to taxonomy ezproject_clients
	foreach ( $ezclients as $ezclient ) {
		$clientname = $ezclient->display_name;
		//add each client to taxonomy for ezproject_clients
		wp_insert_term( $clientname ,'ezproject_clients', array());
	}	
}
add_action( 'user_register', 'get_all_rjs_ezclients' );