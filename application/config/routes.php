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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['details/(:any)']='service/details/$1';
$route['terms-of-service']='faq/terms';
$route['directory-details/(:any)']='directorys/directory_details/$1';
$route['blog-details/(:any)']='blog/blog_details/$1';
$route['disclaimer']='policy/disclaimer';
$route['copyright']='policy/copyright';
$route['how-it-works']='policy/howitsworks';
$route['privacy-policy']='policy/privacy';




$route['admin-logindb']='admin/logindb';
$route['admin-logout']='admin/logout';

$route['admin-add-banner']='home/add_banner';

$route['admin-bannerdb']='home/bannerdb';
$route['admin-bannerview']='home/bannerview';
$route['admin-bannerdel/(:any)']='home/bannerdel/$1';
$route['admin-banneredit/(:any)']='home/banneredit/$1';
$route['admin-bannerupd']='home/bannerupd';

$route['admin-servicepg']='service/servicepg';
$route['admin-svdb']='service/servicedb';
$route['admin-serviceview']='service/serviceview';
$route['admin-servicedel/(:any)']='service/servicedel/$1';
$route['admin-serviceedit/(:any)']='service/serviceedit/$1';
$route['admin-serviceupd']='service/serviceupd';

$route['admin-directorys-add']='directorys/directorys_add';
$route['admin-directorys-db']='directorys/directorys_db';
$route['admin-directorys-view']='directorys/directorys_view';
$route['admin-directory-del/(:any)']='directorys/directory_del/$1';
$route['admin-directorys-edit/(:any)']='directorys/directorys_edit/$1';
$route['admin-directorys-upd']='directorys/directorys_upd';


$route['admin-contact-add']='contact/admin_contact_details';
$route['admin-contact-detailsdb']='contact/admin_contact_detailsdb';
$route['admin-contact-view']='contact/admin_contact_view';
$route['admin-contactdel/(:any)']='contact/admin_contact_del/$1';
$route['admin-contactedit/(:any)']='contact/admin_contact_edit/$1';
$route['admin-contactupd']='contact/contact_details_upd';


$route['admin-blog-add']='blog/blog_add';
$route['admin-blog-db']='blog/blog_db';
$route['admin-blog-view']='blog/blog_view';
$route['admin-blog-del/(:any)']='blog/blog_del/$1';
$route['admin-blog-edit/(:any)']='blog/blog_edit/$1';
$route['admin-blog-upd']='blog/blog_upd';


$route['admin-policy-add']='policy/admin_policy';
$route['admin-policydb']='policy/admin_policy_db';
$route['admin-policy-view']='policy/admin_policy_view';
$route['admin-contactdel/(:any)']='policy/admin_contact_del/$1';
$route['admin-policy-edit/(:any)']='policy/admin_policy_edit/$1';
$route['admin-policy-upd']='policy/admin_policy_upd';



$route['admin-disclaimer-add']='policy/admin_disclaimer_add';
$route['admin-disclaimerdb']='policy/admin_disclaimer_db';
$route['admin-disclaimer-view']='policy/admin_disclaimer_view';
// $route['admin-contactdel/(:any)']='policy/admin_contact_del/$1';
$route['admin-disclaimer-edit/(:any)']='policy/admin_disclaimer_edit/$1';
$route['admin-disclaimer-upd']='policy/admin_disclaimer_upd';

$route['admin-copyright-add']='policy/admin_copyright';
$route['admin-copyright-db']='policy/admin_copy_db';
$route['admin-copyright-view']='policy/admin_copyright_view';
// $route['admin-contactdel/(:any)']='policy/admin_contact_del/$1';
$route['admin-copyright-edit/(:any)']='policy/admin_copyright_edit/$1';
$route['admin-copyright-upd']='policy/admin_copyright_upd';


$route['admin-howitwork-add']='policy/admin_howitwork_add';
$route['admin-howitwork-db']='policy/admin_howitwork_db';
$route['admin-howitwork-view']='policy/admin_howitwork_view';
// $route['admin-contactdel/(:any)']='policy/admin_contact_del/$1';
$route['admin-howitwork-edit/(:any)']='policy/admin_howitwork_edit/$1';
$route['admin-howitwork-upd']='policy/admin_howitwork_upd';

//About us
$route['admin-aboutus']='about/aboutuspg';
$route['admin-aboutusdb']='about/aboutusdb';
$route['admin-aboutusview']='about/aboutusview';
// $route['admin-aboutusdel/(:any)']='about/aboutusdel/$1';
$route['admin-aboutusedit/(:any)']='about/aboutusedit/$1';
$route['admin-aboutusupd']='about/aboutusupd';


$route['customer-register-db']='customer/customer_db';
$route['vendors-register-db']='vendors/vendor_db';

$route['login-db']='login/logindb';

$route['vendor-dashboard']='dashboard/Vendor/vendor';

$route['admin-vendor-details-dashboard']='dashboard/Vendor/vendor_details';


$route['admin-vendor-details-view/(:any)']='dashboard/Vendor/vendor_view/$1';


$route['logout']='login/logout';
$route['logout-vendor']='login/logout_vendor';


$route['vehicle-db']='dashboard/Vendor/vehicle_db';

$route['vehicle-edit/(:any)']='dashboard/Vendor/vehicle_edit/$1';

$route['vehicle-update']='dashboard/Vendor/vehicle_update';

$route['vehicle-list/(:any)']='dashboard/Vendor/admin_vehicles_list/$1';


$route['admin-download/(:any)']='dashboard/Vendor/download/$1';

$route['admin-dashboard']='admindashboard/dashboard';
$route['admin-vehicle-export']='dashboard/Vendor/export';
$route['admin-vendor-export']='dashboard/Vendor/vendor_export';

$route['vendor-profile-edit/(:any)']='vendors/vendor_profile_edit/$1';

$route['vendor-profile-update']='vendors/vendor_profile_update';

$route['admin-approve-vehicle/(:any)']='dashboard/Vendor/vehicle_approve/$1';
$route['admin-approve-vendor/(:any)']='dashboard/Vendor/vendor_approve/$1';

$route['admin-advertisement']='advertisement/advertisements';

$route['admin-advertisements-data']='advertisement/advertisements_data';
$route['admin-advertisements-view']='advertisement/advertisements_view';
$route['admin-advertisement-edit/(:any)']='advertisement/advertisement_edit/$1';

$route['admin-advertisement-upd']='advertisement/advertisement_upd';
$route['admin-vendor-add']='vendors/admin_vendor_add';


$route['admin-vendor-delete/(:any)']='dashboard/Vendor/admin_vendor_delete/$1';
$route['admin-vendor-edit/(:any)']='dashboard/Vendor/admin_vendor_edit/$1';




$route['admin-customer-details']='customer/admin_customer_details';


$route['admin-customer-delete/(:any)']='customer/admin_customer_delete/$1';

$route['admin-customer-export']='customer/customer_export';

$route['admin-customer-advertisement']='advertisement/customer_advertisement';
$route['admin-customer-advertisements-data']='advertisement/customer_ads_data';

$route['admin-customer-ads-view']='advertisement/customer_ads_view';
$route['admin-customer-ads-edit/(:any)']='advertisement/customer_ads_edit/$1';

$route['admin-customer-ads-update']='advertisement/customer_ads_update';


$route['admin-vendor-update']='dashboard/Vendor/admin_vendor_update';

$route['admin-vendor-profile']='dashboard/Vendor/profile_picture_data';

$route['customer-profile-edit/(:any)']='customer/customer_profile_edit/$1';
$route['customer-profile-update']='customer/customer_profile_update';

$route['search-pincode']='directorys/search_keyword';


$route['admin-all-vehicle-details']='dashboard/Vendor/all_vehicles_details';

$route['admin-vehicle-delete/(:any)']='dashboard/Vendor/vehicle_delete/$1';
$route['admin-all-vehicle-export']='dashboard/Vendor/all_vehicle_export';
//filter
$route['choise-state']='directorys/choise_state';
$route['search-pin']='directorys/search_pin';
$route['body-type-filter/(:any)']='directorys/body_type_filter/$1';
$route['quick-search']='directorys/quick_search';


$route['admin-body-type-add']='bodytype/body_type_add';

$route['admin-body-type-db']='bodytype/body_type_db';
$route['admin-body-type-view']='bodytype/body_view';
$route['admin-body-type-delele/(:any)']='bodytype/body_type_delele/$1';

$route['admin-body-type-edit/(:any)']='bodytype/body_type_edit/$1';

$route['admin-body-type-upd']='bodytype/body_type_upd';

$route['customer-add-post-db']='dashboard/Dashboard/customer_add_post_db';

//popup route
$route['admin-popup']='popup/popuppg';
$route['admin-popup-data']='popup/pop_up_data';
$route['admin-pop-up-view']='popup/pop_up_view';
// // $route['admin-aboutusdel/(:any)']='about/aboutusdel/$1';
$route['admin-pop-up-edit/(:any)']='popup/pop_up_edit/$1';
$route['admin-popup-update']='popup/popup_update';


//customer support

$route['customer-support']='customer/support';

$route['customer-support-data']='customer/support_data';

$route['customer-suppot-data-view']='customer/suppot_data_view';

$route['admin-customer-support-delete/(:any)']='customer/support_delete/$1';

//vendor support
$route['vendor-support']='vendors/vendor_support';
$route['admin-vendor-support-data']='vendors/vendor_support_data';
$route['admin-vendor-support-list']='vendors/admin_vendor_support_list';

$route['admin-vendor-support-delete/(:any)']='vendors/support_delete/$1';

$route['admin-vendor-support-export']='vendors/vendor_support_export';

//announcement
$route['admin-announcement']='announcement/announcements';
$route['admin-announcements-data']='announcement/announcements_data';
$route['admin-announcement-view']='announcement/announcement_view';
$route['admin-announcement-del/(:any)']='announcement/announcement_del/$1';
$route['admin-announcement-edit/(:any)']='announcement/announcement_edit/$1';
$route['admin-announcement-upd']='announcement/announcement_upd';

//Mission
$route['admin-mission']='mission/missions';
$route['admin-missions-data']='mission/missions_data';
$route['admin-missions-view']='mission/missions_view';
$route['admin-mission-edit/(:any)']='mission/mission_edit/$1';
$route['admin-mission-upd']='mission/mission_upd';

//contact Form
$route['contact-form-data']='contact/contact_form_data';
$route['admin-contact-form-list']='contact/admin_contact_form_list';
$route['admin-contact-from-del/(:any)']='contact/admin_contact_from_del/$1';
$route['home-contact-form-data']='contact/home_contact_form';

//service advertisment
$route['admin-service-advertisment']='advertisement/service_advertisment';
$route['admin-service-advertisements-data']='advertisement/service_advertisements_data';
$route['admin-service-advertisements-view']='advertisement/service_advertisements_view';

$route['admin-service-advertisements-edit/(:any)']='advertisement/service_advertisement_edit/$1';

$route['admin-service-advertisement-upd']='advertisement/service_advertisement_upd';

$route['admin-customer-requirement']='customer/customer_requirement';
$route['contact-number-view/(:any)']='home/contact_number/$1';
$route['contact-requirement-edit/(:any)']='dashboard/Dashboard/customer_req_edit/$1';
$route['contact-req-upd']='dashboard/Dashboard/customer_req_upd';
$route['customer-requirement-approve/(:any)']='customer/customer_requirement_approve/$1';

$route['directory-comments-data']='directorys/directory_comment';

//admin directory advertisement
 $route['admin-directory-advertisement']='advertisement/directory_advertisement';
 $route['admin-directory-advertisement-data']='advertisement/directory_advertisement_data';
 $route['admin-directory-view']='advertisement/directory_view';
 $route['admin-directory-delete/(:any)']='advertisement/directory_delete/$1';
 $route['admin-directory-edit/(:any)']='advertisement/directory_edit/$1';
 $route['admin-directory-update']='advertisement/directory_update';

 //top directory
 $route['admin-directory-advertisement-top']='advertisement/directory_advertisement_top';
 $route['admin-directory-top-advertisement-data']='advertisement/directory_top_advertisement_data';
 $route['admin-directory-top-view']='advertisement/directory_top_view';
 $route['admin-directory-top-delete/(:any)']='advertisement/directory_top_delete/$1';
 $route['admin-directory-top-edit/(:any)']='advertisement/directory_top_edit/$1';
 $route['admin-directory-top-update']='advertisement/directory_top_update';

 //directory details advertisement

 $route['admin-directory-details-advertisement']='advertisement/directory_details_advertisement';
 $route['admin-directory-details-data']='advertisement/directory_details_data';
 $route['admin-directory-details-view']='advertisement/directory_details_view';
 $route['admin-directory-details-delete/(:any)']='advertisement/directory_details_delete/$1';
 $route['admin-directory_details_ads_edit/(:any)']='advertisement/directory_details_ads_edit/$1';
 $route['admin-directory_details_update']='advertisement/directory_details_update';

 //change password for customer

 $route['change-password/(:any)']='customer/change_password/$1';
$route['password_update']='customer/password_update';

//change password for vendor

$route['vendor-change-password/(:any)']='vendors/change_password/$1';
$route['vendor-password-update']='vendors/vendor_password_update';

//customer requirement
$route['customer-requirement']='customer/customer_requirements';

//forget password

$route['forget-password-page']='login/forget_password_page';

$route['ForgotPassword']='login/ForgotPassword';

//reating
$route['rating']='directorys/reating';

$route['submit-reating']='directorys/submit_reating';


 
 


























