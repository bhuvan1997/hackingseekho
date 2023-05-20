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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['mentor/Signup'] = 'mentor/auth/register';
$route['mentor/Signin'] = 'mentor/auth/login';
$route['mentor/Home'] = 'mentor/dashboard/home';
$route['mentor/logout'] = 'mentor/auth/logout';
$route['mentor/QnA'] = 'mentor/dashboard/QnA';
$route['mentor/Profile-Setting'] = 'mentor/dashboard/myProfile';
$route['mentor/Profile'] = 'mentor/dashboard/profile_preview';
$route['mentor/Batch'] = 'mentor/dashboard/view_batch';
$route['mentor/Add_Batch'] = 'mentor/dashboard/add_batch';
$route['mentor/View_Enrolled'] = 'mentor/dashboard/view_enrolled_by_batch';
$route['mentor/Shared_Notes'] = 'mentor/dashboard/enrolled_notes_share';


$route['user/Signup'] = 'user/auth/register';
$route['user/Signin'] = 'user/auth/login';
$route['user/Home'] = 'user/dashboard/home';
$route['user/logout'] = 'user/auth/logout';
$route['user/Profile-Setting'] = 'user/dashboard/profile_setting';
$route['user/Profile'] = 'user/dashboard/profile_preview';
$route['user/Batch-Enrolled'] = 'user/dashboard/enrolled_batch';
$route['user/Notes'] = 'user/dashboard/notes';
$route['user/Add-Assignment'] = 'user/dashboard/assignment';
$route['user/View-Assignment'] = 'user/dashboard/view_assignment';

$route['admin/Signup'] = 'admin/auth/register';
$route['admin/Signin'] = 'admin/auth/login';
$route['admin/Home'] = 'admin/dashboard/home';
$route['admin/logout'] = 'admin/auth/logout';
$route['admin/Profile-Setting'] = 'admin/dashboard/profile_setting';
$route['admin/Profile'] = 'admin/dashboard/profile_preview';
$route['admin/Batch-Enrolled'] = 'admin/dashboard/enrolled_batch';
$route['admin/Notes'] = 'admin/dashboard/notes';
$route['admin/Add-Assignment'] = 'admin/dashboard/assignment';
$route['admin/View-Assignment'] = 'admin/dashboard/view_assignment';

$route['Home'] = 'main/dashboard/home';
$route['Class-Detail/(:any)'] = 'main/dashboard/class_detail/$1';
$route['class_enroll/(:any)'] =  'main/dashboard/enroll_class/$1';
$route['All-Classes'] =  'main/dashboard/live_class_grid';
$route['Mentor-Profile/(:any)'] =  'main/dashboard/mentor_profile/$1';
$route['All-Mentor'] =  'main/dashboard/mentor_list';
$route['Search'] =  'main/dashboard/search';