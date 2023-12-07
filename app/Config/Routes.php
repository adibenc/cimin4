<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'D1Controller::index');

$routes->get('/d1', 'D1Controller::index');
$routes->get('/d1/all', 'D1Controller::all');
$routes->get('/d1/show', 'D1Controller::show');
$routes->get('/d1/create', 'D1Controller::create');
$routes->get('/d1/update/(:id)', 'D1Controller::update');
$routes->get('/d1/delete/(:id)', 'D1Controller::delete');
