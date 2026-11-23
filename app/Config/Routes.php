<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('tentang', 'Home::about');
$routes->get('kontak', 'Home::contact');
$routes->get('menu', 'Menu::index');
$routes->get('berita', 'News::index');
$routes->get('toko', 'Store::index');
$routes->get('karir', 'Career::index');