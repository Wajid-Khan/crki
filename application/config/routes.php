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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['home'] = 'Home';
$route['index'] = 'home/index';
$route['about-us'] = 'home/about_us';
$route['home'] = 'Home';
$route['leadership'] = 'home/leadership';
$route['strengths-values'] = 'home/strengths_value';
$route['ongoing-project'] = 'home/ongoing_project';
$route['completed-projects'] = 'home/completed_project';
$route['marble-suppliers'] = 'home/marble_supplier';
$route['modern-interiors'] = 'home/modern_interior';
$route['gallery'] = 'home/gallery';
$route['downloads'] = 'home/download';
$route['careers'] = 'home/career';
$route['blogs'] = 'home/blog';
$route['contact-us'] = 'home/contact_us';
$route['grand-arena-project'] = 'home/grand_arena_project';
$route['haritha-vanam-project'] = 'home/haritha_vanam_project';
$route['fortune-height-project'] = 'home/fortune_height_project';

$route['ramchandra-divine-county'] = 'home/ramchandra_divine_county';
