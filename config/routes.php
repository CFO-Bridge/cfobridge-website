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
$route['login'] = 'admin/login';
$route['event-inner/(:any)'] = 'home/eventsInner/$1';
$route['downloads'] = 'home/testDownloads';
// $route['test-download'] = 'home/testDownloads';
$route['thankyou'] = 'home/thankyou';
$route['download-inner/(:any)'] = 'home/downloadInner/$1';
$route['download-page/(:any)'] = 'home/downloadInnerTest/$1';
$route['about'] = 'home/about';
$route['ctobridge'] = 'home/ctobridge';
$route['kfwcorp'] = 'home/kfwcorp';
$route['videos'] = 'home/videos';
$route['gallery-media'] = 'home/gallery_media';
$route['events'] = 'home/events';
$route['contact'] = 'home/contact';
$route['testimonials'] = 'home/testimonials';
$route['team'] = 'home/team';
$route['team/(:any)'] = 'home/innerteam/$1';
$route['services'] = 'home/parentservice';
$route['service/(:any)'] = 'home/innerservice/$1';
$route['service-updated/(:any)'] = 'home/innerservicenew';
$route['services/(:any)'] = 'home/accounts/$1';
$route['googleoauth']='home/googleoauthcode';
$route['industry/(:any)'] = 'home/innerindustry/$1';
$route['location/(:any)'] = 'home/location/$1';
$route['career'] = 'home/career';
$route['terms-and-conditions'] = 'home/tnc';
$route['finance-tool'] = 'home/finance_tool';
$route['privacy-policy'] = 'home/privacy';
$route['clients'] = 'home/clients';
$route['clients-demo'] = 'home/clients_demo';
$route['case-studies'] = 'home/case_studies';
$route['landing-page'] = 'home/landing';
$route['virtualcfo'] = 'home/landing';
$route['resources/(:any)'] = 'home/blogview/$1';
$route['blogs'] = 'home/articles';
$route['articles'] = 'home/articles';
$route['news-media'] = 'home/news_media';
//$route['media-coverage'] = 'home/media';
//$route['posts'] = 'home/blogs';
$route['job/(:any)'] = 'home/jobview/$1';
$route['post/(:any)'] = 'home/blogview/$1';
$route['404_override'] = 'home/no_page_found';
$route['translate_uri_dashes'] = FALSE;
