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
$routes->get('memberView', 'MemberAdd::fetchmember');
$routes->post('memberSignup', 'MemberAdd::memberSignup');
$routes->get('member/edit/(:num)', 'MemberAdd::Edit/$1');
$routes->put('member/update/(:num)', 'MemberAdd::update/$1');
$routes->get('member/delete/(:num)', 'MemberAdd::delete/$1');

// Meal Routes


