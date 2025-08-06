<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/productos', 'Productos::index');

//detalle
$routes->get('productos/verDetalle/(:num)', 'Productos::verDetalle/$1');

//contacto 
$routes->get('contacto', 'Productos::contacto');
