<?php 

/**************************
Add Project Post Type
**************************/
if ( !post_type_exists( 'ezproject' )){
	function rjs_create_ez_project(){
			$labels = array(
				'name'=>'Projects',
				'singular_name'=>'Project',
				'add_new'=>'Add Project',
				'add_new_item'=>'Create Project',
				'edit_item'=>'Edit Project',
				'new_item'=>'New Project',
				'view_item'=>'Open Project',
				'search_items'=>'Search Projects',
			);

			$args = array(
				'labels'=>$labels, 
				'public'=>true,
				'has_archive' => false,
				'menu_position'=>31,
				'rewrite' => array( 'slug' => '/project', 'with_front' => false),
				'supports'=>array('title','editor','excerpt','thumbnail','custom-fields'),
				'query_var' => false,
				'show_in_nav_menus' => true,
				'menu_icon'   => 'dashicons-businessman',
				'capability_type' => 'post'
				);
				
			register_post_type('ezproject', $args);
	}
	add_action( 'init', 'rjs_create_ez_project' );
}

/**********************************
Add Taxonomy Terms For Clients Name
**********************************/
	function rjs_create_ez_client() 
	{
		$client_tax_labels = array(
			'name' => 'Clients',
			'singular_name' => 'Clients',
			'search_items' =>  'Search Clients',
			'popular_items' => 'Popular Clients',
			'all_items' => 'All Clients',
			'parent_item' => 'Parent Client',
			'parent_item_colon' => 'Parent Client:',
			'edit_item' => 'Edit Client', 
			'update_item' => 'Update Client',
			'add_new_item' => 'Add New Client',
			'new_item_name' => 'New Client Name',
			'separate_items_with_commas' => 'Separate clients with commas',
			'add_or_remove_items' => 'Add or remove client',
			'choose_from_most_used' => 'Choose from the most used clients',
			'menu_name' => 'Clients'
		);

		register_taxonomy('ezproject_clients',
			array('ezproject'), 
				array(
					'hierarchical'=>true,
					'show_ui'=>true,
					'labels' => $client_tax_labels,
					'public' => true,
					'query_var'=> true,
					'label' => 'Clients',
					'rewrite' => array('slug' => 'clients', 'hierarchical' => true)
					)
		);
	}

	add_action( 'init', 'rjs_create_ez_client' );
