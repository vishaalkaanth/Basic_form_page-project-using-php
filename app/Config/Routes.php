<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index');

$routes->get('/form', 'Formcontroller::index');
$routes->post('/submitForm', 'Formcontroller::submitForm');
$routes->get('/userprofile', 'Userprofilecontroller::index');
$routes->get('/edituserprofile', 'EditUserprofileController::index');
$routes->post('/updateprofile', 'EditUserprofileController::updateprofile');
$routes->get('/reportpage','Userprofilecontroller::report');

$routes->get('/edituserprofile/(:num)', 'Userprofilecontroller::edituserprofile/$1');
$routes->get('/userprofile/(:num)', 'Userprofilecontroller::viewuserprofile/$1');
$routes->get('/reportpage/(:num)', 'Userprofilecontroller::deleteprofile/$1');
$routes->get('/additional_details/(:num)', 'Userprofilecontroller::additionalDetails/$1');
$routes->post('/reportpage', 'Userprofilecontroller::submitFamilyDetails');
