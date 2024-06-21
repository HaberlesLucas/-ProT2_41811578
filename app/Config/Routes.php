<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/quienes-somos', 'QuienesSomos::vistaQS');
$routes->get('/login', 'Login::vistaLogin');
$routes->get('/registrarse', 'Registro::vistaRegistro');
$routes->get('/acerca-de', 'AcercaDe::vistaAcercaDe');
