<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Books;
use App\Controllers\Ajax;
use App\Controllers\Login;
use App\Controllers\Api\BookController;
use App\Controllers\GoogleController;
use App\Controllers\ContactController; // ?? Added for contact form

/**
 * @var RouteCollection $routes
 */

// Home Routes
$routes->get('/', 'Home::index');
$routes->get('home', [Pages::class, 'home']);

// Book Routes
$routes->get('books', [Books::class, 'index']);
$routes->get('books/create', [Books::class, 'create']);
$routes->get('books/(:segment)', [Books::class, 'view']);
$routes->post('books', [Books::class, 'store']);

// AJAX Routes
$routes->get('ajax/get/(:segment)', 'Ajax::get/$1');

// Login & Registration
$routes->get('login', [Pages::class, 'login']);
$routes->post('login/submit', [Pages::class, 'login_submit']);
$routes->post('register/submit', [Login::class, 'register_submit']);

// Google Books Search (Current Working Setup)
$routes->get('google/search', [GoogleController::class, 'search']);

// API Routes (for possible use in GoogleController or frontend)
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) {
    $routes->get('books', 'BookController::index');
    $routes->get('books/(:num)', 'BookController::show/$1');
    $routes->post('books', 'BookController::create');
    $routes->put('books/(:num)', 'BookController::update/$1');
    $routes->delete('books/(:num)', 'BookController::delete/$1');
});

// ?? Contact Form Submission Route
$routes->post('contact/submit', [ContactController::class, 'submit']);

// Static Pages (fallback)
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
