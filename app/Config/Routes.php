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
$routes->get('memberView', 'MemberAdd::memberview');
$routes->get('about', 'Home::about');
$routes->get('gallery', 'Home::gallery');
$routes->get('contact', 'Home::contact');

