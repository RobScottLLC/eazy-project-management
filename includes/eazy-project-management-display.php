<?php

function rjs_eazy_client_content($content) {
	if( is_singular('ezproject') && is_main_query() ) {
		$content;	
		global $post;
		$current_user = wp_get_current_user();
	    $current_term = get_the_terms($post->id, 'ezproject_clients');
	    $current_name = $current_term[0]->name;
		$current_login = $current_user->display_name;
		
	 	if (is_user_logged_in() and $current_login == $current_name || current_user_can('administrator') ) {		
			return $content;
		} 

		elseif (is_user_logged_in() and $current_login != $current_name ) {
			echo "<h3 class='rjs-login-title'>Sorry, you do not have access to this project.</h3>";
		} 
		else{
			echo "<h3 class='rjs-login-title'>Please login to view your project.</h3>";
			wp_login_form();
		}
	}else{
		$content;	
		global $post;
		return $content;
	}
}
add_filter('the_content', 'rjs_eazy_client_content');