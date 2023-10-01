<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/prod', 'Home::showprod');
$routes->get('/customer', 'Home::showcustomer');

$routes->get('/admin', 'AdminController::adminIndex');
$routes->post('/admin', 'AdminController::insert');

$routes->get('auth/admin', 'AdminController::loginAdmin');
