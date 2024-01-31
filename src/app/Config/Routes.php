<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Blog::index');
$routes->get('/post/(:num)', 'Blog::post/$1');
$routes->get('/sobre', 'Blog::sobre');
$routes->get('/contato', 'Blog::contato');

$routes->get('/app/dashboard','CMS::index');