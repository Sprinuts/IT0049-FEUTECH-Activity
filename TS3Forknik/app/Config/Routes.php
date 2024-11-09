<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/','Index::index');
$routes->get('index','Index::index');
$routes->get('index/index','Index::index');
$routes->get('home','Index::index');

$routes->get('index/about', 'Index::about');

// For Users
$routes->get('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/view/(:num)', 'Users::view/$1');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');
$routes->get('users/delete/(:num)', 'Users::delete/$1');

// For Login
$routes->get('index/login', 'Index::login');
$routes->post('index/login', 'Index::login');

// For Register in login page
$routes->get('index/signup', 'Index::signup');
$routes->post('index/signup', 'Index::signup');

// For Register
$routes->get('index/register', 'Index::register');

// For Logout
$routes->get('index/logout', 'Index::logout');

// For Products
$routes->get('products', 'Products::index');
$routes->get('products/add', 'Products::add');
$routes->post('products/add', 'Products::add');
$routes->get('products/view/(:num)', 'Products::view/$1');
$routes->get('products/edit/(:num)', 'Products::edit/$1');
$routes->post('products/edit/(:num)', 'Products::edit/$1');
$routes->get('products/delete/(:num)', 'Products::delete/$1');