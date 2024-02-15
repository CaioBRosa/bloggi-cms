<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('', function ($routes) {
    $routes->get('/', 'Blog::index');
    $routes->get('/search','Blog::search');
    $routes->get('/post/(:num)', 'Blog::post/$1');
    $routes->get('/sobre', 'Blog::sobre');
    $routes->get('/contato', 'Blog::contato');
});

$routes->get('/login','Login::index');
$routes->post('/login','Login::login');
$routes->get('/logout','Login::logout');

$routes->group('app', function ($routes) {
    $routes->get('dashboard','CMS::index');
    $routes->get('posts','CMS::posts');
    $routes->get('categories','CMS::categories');
    $routes->get('comments','CMS::comments');
    $routes->get('website','CMS::website');
    $routes->get('settings','CMS::settings');
});