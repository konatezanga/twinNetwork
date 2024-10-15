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
$route['presentation']='welcome/presentation';
$route['deboucher']='welcome/deboucher';
$route['contact']='welcome/contact';
$route['profile']='welcome/profile';
$route['inscription']='welcome/inscription';
$route['connexion']='welcome/connexion';
$route['plus_info']='welcome/plus_info';
$route['photo']='welcome/photo';
$route['twinbook']='welcome/twinbook';
$route['stage_emploi']='welcome/stage_emploi';
$route['valider']='welcome/valider';
$route['valider_info']='welcome/valider_info';
$route['stage/(:num)']='welcome/stage/$1';
$route['emploi/(:num)']='welcome/emploi/$1';


$route['admin'] = 'Administrateur';
$route['admin/verifier'] = 'Administrateur/connexion';
$route['admin/twinbook/liste'] = 'Administrateur/liste';
$route['admin/page_twinbook'] = 'Administrateur/page_twinbook';
$route['admin/page_twinbook/supprimer/(:num)/(:any)'] = 'Administrateur/suppression/$1/$2';
$route['admin/page_twinbook/add_twinbook'] = 'Administrateur/add_twinbook';
$route['admin/page_twinbook/add_twinbook/add'] = 'Administrateur/insertion';
$route['admin/espace'] = 'Administrateur/admin';
$route['admin/user'] = 'Administrateur/user';
$route['admin/delete/(:num)'] = 'Administrateur/delete_user/$1';
$route['admin/accepte/(:num)'] = 'Administrateur/accepte_user/$1';
$route['admin/contact'] = 'Administrateur/contact';
$route['admin/contact/message/(:num)'] = 'Administrateur/message/$1';
$route['admin/stage_emploi']='Administrateur/stage_emploi';
$route['admin/stage_emploi/add']='Administrateur/add_stage_emploi';
$route['admin/stage_emploi/add/valide']='Administrateur/valide_stage_emploi';
$route['admin/stage_emploi/add/valider']='Administrateur/valider';
$route['admin/stage/(:num)']='Administrateur/stage/$1';
$route['admin/emploi/(:num)']='Administrateur/emploi/$1';
$route['404_override'] = 'welcome';
$route['translate_uri_dashes'] = FALSE;
