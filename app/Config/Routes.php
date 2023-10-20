<?php
use CodeIgniter\Router\RouteCollection;
use App\Filters\AuthGuard;
/**
 * @var RouteCollection $routes
 */

// Forntend Routes
$routes->get('/', 'HomeController::index');
$routes->get('footer', 'HomeController::footer');
$routes->get('about', 'HomeController::about');
$routes->get('gallery', 'HomeController::gallery');
$routes->get('contact', 'HomeController::contact'); 

// Login For Backend
$routes->get('login', 'LoginController::index');
$routes->get('user_login', 'LoginController::loginAuth');
$routes->get('signUp', 'LoginController::signUp');
$routes->get('logout', 'LoginController::logout');

// Backend Routes
$routes->get('dashboard', 'DashboardController::index');

// Member Routes
$routes->get('memberAdd', 'MemberController::index');
$routes->post('memberSignup', 'MemberController::memberSignup');
$routes->get('memberView', 'MemberController::fetchmember');
$routes->get('member/edit/(:num)', 'MemberController::Edit/$1');
$routes->put('member/update/(:num)', 'MemberController::update/$1');
$routes->get('member/delete/(:num)', 'MemberController::delete/$1');

// House Rent Routes
$routes->get('rentAdd', 'RentController::index');
$routes->post('houseRent', 'RentController::houseRent');
$routes->get('rentView', 'RentController::fetchrent');
$routes->get('rent/edit/(:num)', 'RentController::Edit/$1');
$routes->put('rent/update/(:num)', 'RentController::update/$1');
$routes->get('rent/delete/(:num)', 'RentController::delete/$1');

// Deposite Routes
$routes->get('depositeAdd', 'DepositeController::index');
$routes->post('depoAdd', 'DepositeController::depoAdd');
$routes->get('depositeView', 'DepositeController::fetchdep');
$routes->get('deposite/delete/(:num)', 'DepositeController::delete/$1');
$routes->get('deposite/edit/(:num)', 'DepositeController::edit/$1');
$routes->put('deposite/update/(:num)', 'DepositeController::update/$1');

// Meal Purchese Routes
$routes->get('bazarAdd', 'PurcheseController::index');
$routes->post('bazarAdd', 'PurcheseController::bazarAdd');
$routes->get('bazarView', 'PurcheseController::fetchbazar');
$routes->get('bazar/delete/(:num)', 'PurcheseController::delete/$1');
$routes->get('bazar/edit/(:num)', 'PurcheseController::edit/$1');
$routes->put('bazar/update/(:num)', 'PurcheseController::update/$1');

// Meal Amount Routes
$routes->get('mealAdd', 'MealController::index');
$routes->post('mealAdd', 'MealController::mealAdd');
$routes->get('mealView', 'MealController::fetchmeal');
$routes->get('meal/delete/(:num)', 'MealController::delete/$1');
$routes->get('meal/edit/(:num)', 'MealController::edit/$1');
$routes->put('meal/update/(:num)', 'MealController::update/$1'); 

// Reports Routes
$routes->get('reportS', 'ReportsController::index');
$routes->get('report/(:num)', 'ReportsController::Edit/$1');
$routes->get('finalReport/(:num)', 'ReportsController::Abc/$1');
$routes->get('abc', 'MemberController::fetchmember');
$routes->get('final', 'MemberController::fetchmem');

// Payment Routes
$routes->get('payAdd', 'PayController::index');
$routes->post('payAdd', 'PayController::payAdd');
$routes->get('payView', 'PayController::fetchpay');


