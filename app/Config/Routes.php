<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
// Fornend Routes
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->get('footer', 'Home::footer');
$routes->get('signUp', 'Login::signUp');
$routes->get('about', 'Home::about');
$routes->get('gallery', 'Home::gallery');
$routes->get('contact', 'Home::contact');

// Backend Routes
$routes->get('dashboard', 'Dashboard::index');

// Member Routes
$routes->get('memberAdd', 'MemberAdd::index');
$routes->post('memberSignup', 'MemberAdd::memberSignup');
$routes->get('memberView', 'MemberAdd::fetchmember');
$routes->get('member/edit/(:num)', 'MemberAdd::Edit/$1');
$routes->put('member/update/(:num)', 'MemberAdd::update/$1');
$routes->get('member/delete/(:num)', 'MemberAdd::delete/$1');

// House Rent Routes
$routes->get('rentAdd', 'HouseRentAdd::index');
$routes->post('houseRent', 'HouseRentAdd::houseRent');
$routes->get('rentView', 'HouseRentAdd::fetchrent');
$routes->get('rent/edit/(:num)', 'HouseRentAdd::Edit/$1');
$routes->put('rent/update/(:num)', 'HouseRentAdd::update/$1');
$routes->get('rent/delete/(:num)', 'HouseRentAdd::delete/$1');


// Deposite Routes
$routes->get('depositeAdd', 'DepositeController::index');
$routes->post('depoAdd', 'DepositeController::depoAdd');
$routes->get('depositeView', 'DepositeController::fetchdep');
$routes->get('deposite/delete/(:num)', 'DepositeController::delete/$1');
$routes->get('deposite/edit/(:num)', 'DepositeController::edit/$1');
$routes->put('deposite/update/(:num)', 'DepositeController::update/$1');

