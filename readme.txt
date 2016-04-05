=== Eazy Project Management ===
Contributors: r0bsc0tt
Tags: project management, password protected content, upload, images, photographs, photography, photographer, client, customer, password, password-protected, wedding, gallery, zip, zipping
Requires at least: 4.3.1
Tested up to: 4.5
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Add projects and display only to clients that are logged in. 

== Description ==
Eazy Project Management is a WordPress plugin that creates a custom post type for projects with a custom taxonomy for clients. The plugin also creates a custom user role for clients. When a user is added with the role client, it adds the users display name to the taxonomy clients. You can then create a custom post type of project and use the taxonomy term client to keep the content of the project protected from users who aren\'t admin or logged in with the display name matching the taxonomy term.   

== Installation ==
1. Upload and the install plugin.
2. Activate the plugin.
3. Create a user for your client, select the role client to adds a taxonomy term to the project post type. 
4. Create a project just like a post. Select the clients you want to display the project for by checking the corresponding taxonomy term that matches the users name. 


== Frequently Asked Questions ==

= How can I customize the layout? =

The plugin uses the default single.php and taxonomy.php or archive.php to display a single project and a client archive. Add single-ezproject.php to your theme for a single project. Add taxonomy-ezproject_clients.php to your theme for the client archive that shows all projects for a client. 

= How does this plugin work? =

The plugin creates a custom post type called Projects with a taxonomy or Clients. You can add a client as a user, so that they are able to login to the website. When you create the users, they are added to the Clients taxonomy for the projects post type. You create a project just like a post, and select the clients you want to show the project to like you would a tag on a post. A PHP if/else statement checks for the user to be either admin or logged in with a user display name that matches the taxonomy terms selected to display the current project. 

== Screenshots ==
1. Projects post type functions just like posts. Clients works like tags, except content is restricted to admin and those tagged to a project. 
2. To have your client show up in the tag list, you need to create a user with the custom role of \'Client\'.
3. You can add a project just like you would a post. It probably uses your themes\' single.php template to display the content. 
4. All projects.
5. Single Project being displayed to admin.
6. Single Project being displayed to logged in user with name matching selected client.
7. Single Project not being displayed to everyone else. 

== Changelog ==
= 1.1 =
* Update rjs_eazy_client_content functions if/else statement to include else block for all content that is not an ezproject post type. This should provide more control for the content filter.

= 1.0 =
* Initial version of plugin.