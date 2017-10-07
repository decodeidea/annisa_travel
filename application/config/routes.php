<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
require_once( BASEPATH .'database/DB'. EXT );
$db =& DB();
$static_page='dc_static_content';
$query = $db->query("SELECT * from ".$static_page);
$result = $query->result();
foreach( $result as $key )
{	$title=strtolower($key->title);
	$route[$key->lang.'/'.str_replace(' ','-',$title)] = 'Static_page/main/'.$key->id;
}
$route['en/admin/'] = 'Admin';
$route['en/admin/(:any)'] = 'Admin/$1';
$route['en/account/'] = 'Account';
$route['en/account/(:any)'] = 'Account/$1';
$route['en/admin_content/'] = 'Admin_content';
$route['en/admin_content/(:any)'] = 'Admin_content/$1';
$route['en/admin_program/'] = 'Admin_program';
$route['en/admin_program/(:any)'] = 'Admin_program/$1';
$route['en/article/'] = 'Article';
$route['en/article/(:any)'] = 'Article/$1';
$route['en/home/'] = 'Home';
$route['en/home/(:any)'] = 'Home/$1';
$route['en/message/'] = 'Message';
$route['en/message/(:any)'] = 'Message/$1';
$route['en/program/'] = 'Program';
$route['en/program/(:any)'] = 'Program/$1';
$route['en/setting_system/'] = 'Setting_system';
$route['en/setting_system/(:any)'] = 'Setting_system/$1';
$route['en/static_page/'] = 'Static_page';
$route['en/static_page/(:any)'] = 'Static_page/$1';

$route['id/admin/'] = 'Admin';
$route['id/admin/(:any)'] = 'Admin/$1';
$route['id/account/'] = 'Account';
$route['id/account/(:any)'] = 'Account/$1';
$route['id/admin_content/'] = 'Admin_content';
$route['id/admin_content/(:any)'] = 'Admin_content/$1';
$route['id/admin_program/'] = 'Admin_program';
$route['id/admin_program/(:any)'] = 'Admin_program/$1';
$route['id/article/'] = 'Article';
$route['id/article/(:any)'] = 'Article/$1';
$route['id/home/'] = 'Home';
$route['id/home/(:any)'] = 'Home/$1';
$route['id/message/'] = 'Message';
$route['id/message/(:any)'] = 'Message/$1';
$route['id/program/'] = 'Program';
$route['id/program/(:any)'] = 'Program/$1';
$route['id/setting_system/'] = 'Setting_system';
$route['id/setting_system/(:any)'] = 'Setting_system/$1';
$route['id/static_page/'] = 'Static_page';
$route['id/static_page/(:any)'] = 'Static_page/$1';

$route['^(en|id)/(.+)$'] = "$2";
$route['^id$'] = $route['default_controller'];
$route['^en$'] = $route['default_controller'];
$route['404_override'] = '';
//static Page

