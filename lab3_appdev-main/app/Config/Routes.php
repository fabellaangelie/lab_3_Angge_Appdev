<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/auth', 'AuthController::login');
$routes->get('/auth/register', 'AuthController::register');
$routes->get('/auth/login', 'Home::showAdmin');
$routes->get('/auth/admin', 'Home::showUser');




$routes->get('/main', 'Home::index');
$routes->get('/prod', 'Home::showprod');
$routes->get('/customer', 'Home::showcustomer');
$routes->get('/about', 'Home::showAbout');
$routes->get('/contact', 'Home::showContact');



$routes->get('/admin', 'AdminController::adminIndex');
$routes->post('/admin', 'AdminController::insert');


$routes->get('/concealer', 'Home::concealer');
$routes->get('/brush', 'Home::brush');
$routes->get('/mascara', 'Home::mascara');
$routes->get('/liptint', 'Home::liptint');
