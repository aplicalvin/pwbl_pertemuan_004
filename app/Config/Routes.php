<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/example','Home::example');

$routes->get('/produk','ProdukController::index');
$routes->get('/keranjang','TransaksiController::index');
