<?php 
/*
 * Plugin Name:       Eazy Project Management
 * Plugin URI:        http://robjscott.com/wordpress/eazy-project-management
 * Description:       Creates custom post type for projects and custom taxonomy for clients. This allows password protected access to projects based on client name taxonomy term and user role.
 * Version:           1.1
 * Author:            Rob Scott, LLC
 * Author URI:        http://robjscott.com
 * Text Domain:       
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'EZ_PROJECT_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'EZ_PROJECT_PLUGIN_FILE_PATH', __FILE__ );
define( 'EZ_PROJECT_PLUGIN_URL', str_replace('index.php','',plugins_url( 'index.php', __FILE__ )));

//include files
require_once(EZ_PROJECT_PLUGIN_PATH . 'includes/eazy-project-management-types.php');
require_once(EZ_PROJECT_PLUGIN_PATH . 'includes/eazy-project-management-roles.php');
require_once(EZ_PROJECT_PLUGIN_PATH . 'includes/eazy-project-management-display.php');