<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/olim', 'contrololim::index');

// $routes->get('/ekstrakurikuler', 'EkstrakurikulerController::index');
// $routes->get('/ekstrakurikuler', 'EkstrakurikulerController::Namahari');



