<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/** @var object $router **/

// =========================
// AUTHENTICATION
// =========================

$router->get('/auth/login', 'Auth::login');
$router->post('/auth/login', 'Auth::login');
$router->get('/auth/logout', 'Auth::logout');


// =========================
// PRODUCT CRUD
// =========================

$router->get('/products', 'Products::index');
$router->get('/products/create', 'Products::create');
$router->post('/products/store', 'Products::store');
$router->get('/products/edit/{id}', 'Products::edit');
$router->post('/products/update/{id}', 'Products::update');
$router->get('/products/delete/{id}', 'Products::delete');