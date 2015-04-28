<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// main routes
$route['default_controller'] = "signins";
$route['404_override'] = '';
// end of main routes

$route['admindashboard/remove_user/(:any)'] = 'admindashboard/remove_user/$1';
//end of routes.php