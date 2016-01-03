#Eazy Project Management
##Description
Eazy Project Management is a WordPress plugin that creates a custom post type for projects with a custom taxonomy for clients. The plugin also creates a custom user role for clients. When a user is added with the role client, it adds the users display name to the taxonomy clients. You can then create a custom post type of project and use the taxonomy term client to keep the content of the project protected from users who aren\'t admin or logged in with the display name matching the taxonomy term.

##License
License: GPLv2  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

##Installation
1. Upload and the install plugin.
2. Activate the plugin.
3. Create a user for your client, select the role client to adds a taxonomy term to the project post type.
4. Create a project just like a post. Select the clients you want to display the project for by checking the corresponding taxonomy term that matches the users name.


##Frequently Asked Questions 
**How can I customize the layout?**  
The plugin uses the default single.php and taxonomy.php or archive.php to display a single project and a client archive. Add single-ezproject.php to your theme for a single project. Add taxonomy-ezproject_clients.php to your theme for the client archive that shows all projects for a client. 
  
**How does this plugin work?**  
The plugin creates a custom post type called Projects with a taxonomy or Clients. You can add a client as a user, so that they are able to login to the website. When you create the users, they are added to the Clients taxonomy for the projects post type. You create a project just like a post, and select the clients you want to show the project to like you would a tag on a post. A PHP if/else statement checks for the user to be either admin or logged in with a user display name that matches the taxonomy term...(line truncated)...

##WordPress Requirements
Requires at least: 4.3.1   
Tested up to: 4.3.1  

##Changelog
= 1.0 =  
First version


##Screenshots 
Projects post type functions just like posts. Clients works like tags, except content is restricted to admin and those tagged to a project.
![screenshot-1](https://cloud.githubusercontent.com/assets/6818209/12076989/38f5cb36-b18c-11e5-9511-ecabfa48f55a.jpg)
  
To have your client show up in the tag list, you need to create a user with the custom role of Client.
![screenshot-2](https://cloud.githubusercontent.com/assets/6818209/12076990/38f63670-b18c-11e5-8f4d-207e08d517a3.jpg)
  
You can add a project just like you would a post. It probably uses your themes single.php template to display the content.
![screenshot-3](https://cloud.githubusercontent.com/assets/6818209/12076993/38f78160-b18c-11e5-86b4-6a3dbbd44791.jpg)
  
All projects.
![screenshot-4](https://cloud.githubusercontent.com/assets/6818209/12076988/38efb19c-b18c-11e5-8f0e-baa18c5e3b4c.jpg)
  
Single Project being displayed to admin.
![screenshot-5](https://cloud.githubusercontent.com/assets/6818209/12076987/38e06f98-b18c-11e5-8436-8587404b3d0a.jpg)
  
Single Project being displayed to logged in user with name matching selected client.
![screenshot-6](https://cloud.githubusercontent.com/assets/6818209/12076991/38f6496c-b18c-11e5-9f39-9dadb48b8b11.jpg)
  
Single Project not being displayed to everyone else.
![screenshot-7](https://cloud.githubusercontent.com/assets/6818209/12076992/38f6f63c-b18c-11e5-900e-ee12d8c555da.jpg)