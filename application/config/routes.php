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
|	https://codeigniter.com/user_guide/general/routing.html
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

$route['default_controller'] = "pages/home_page_view";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/

//$route['email-send'] = 'email/send';

$route['register'] = 'user/register';
$route['loginMe'] = 'login/loginMe';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";
$route['email'] = 'Email/SendEmail';

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";
$route['BuyerRequestForBids'] = 'form/BuyerRequestForBids';
$route['IdentifyingBuyerVehicle'] = 'form/IdentifyingBuyerVehicle';
$route['sellerbid'] = 'form/SellerBid';
$route['auction-:num'] = 'form/ViewOfBidRequest';
$route['ViewOfBidRequestDashboard/auction-:num'] = 'form/ViewOfBidRequestDashboard';
$route['DisplayAllAuctions'] = 'form/SellerDisplayAllAuctions';
$route['DisplayAllAuctions'] = 'form/BuyerDisplayAllAuctions';
$route['about'] = 'pages/about_page_view';
$route['contacts'] = 'pages/contacts_page_view';
$route['how-it-works'] = 'pages/how_it_works_page_view';
$route['language'] = 'pages/language_page_view';
$route['privacy-policy'] = 'pages/privacy_policy_page_view';
$route['mark_data_submit'] = 'ajax/mark_data_submit';


$route['dashboard/home'] = 'admin/admin_home_page_view';
$route['dashboard/about'] = 'admin/admin_about_page_view';
$route['dashboard/language'] = 'admin/admin_language_page_view';
$route['dashboard/contacts'] = 'admin/admin_contacts_page_view';
$route['dashboard/privacy-policy'] = 'admin/admin_privacy_policy_page_view';
$route['dashboard/how-it-works'] = 'admin/admin_how_it_works_page_view';
$route['dashboard/notifications'] = 'admin/admin_notification_page_view';
$route['dashboard/DashboardIdentifyingBuyerVehicle'] = 'form/DashboardIdentifyingBuyerVehicle';
$route['dashboard/DashboardBuyerRequestForBids'] = 'form/DashboardBuyerRequestForBids';
$route['dashboard/DashboardIdentifyingBuyerVehicle'] = 'form/DashboardIdentifyingBuyerVehicle';
//$route['dashboard/DashboardViewOfBidRequest'] = 'form/DashboardViewOfBidRequest';
$route['dashboard/DashboardViewOfBidRequest/auction-:num'] = 'form/DashboardViewOfBidRequest';
$route['dashboard/DashboardSellerBid'] = 'form/DashboardSellerBid';
$route['dashboard/DashboardSellerBid'] = 'form/DashboardSellerBid';


$route['upload'] = 'upload/display';
$route['upload/do_upload'] = 'upload/do_upload';

$route['dashboard/askquestion'] = 'form/DashboardQuestions';
$route['dashboard/transport'] = 'form/DashboardTransport';
$route['register-seller'] = 'user/RegisterSeller';



/* End of file routes.php */
/* Location: ./application/config/routes.php */
