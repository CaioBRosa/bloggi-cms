<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Blog::index');
$routes->get('/search','Blog::search');
$routes->get('/post/(:num)', 'Blog::post/$1');
$routes->get('/sobre', 'Blog::sobre');
$routes->get('/contato', 'Blog::contato');

$routes->get('/login','Login::index');
$routes->post('/login','Login::login');
$routes->get('/logout','Login::logout');

//dashboard
$routes->get('/app/dashboard','CMS::index');