<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Login::index');
$routes->get('footer', 'Home::footer');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('signUp', 'Login::signUp');
$routes->get('memberAdd', 'MemberAdd::index');
$routes->get('memberView', 'MemberAdd::fetchmember');
$routes->get('about', 'Home::about');
$routes->get('gallery', 'Home::gallery');
$routes->get('contact', 'Home::contact');
$routes->post('memberSignup', 'MemberAdd::memberSignup');
$routes->get('member/edit/(:num)', 'MemberAdd::edit/$1');
$routes->put('member/update/(:num)', 'MemberAdd::update/$1');
$routes->put('member/delete/(:num)', 'MemberAdd::delete/$1');

