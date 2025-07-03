<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\News;
use App\Controllers\Pages;
use App\Controllers\Books;
use App\Controllers\Ajax;
use App\Controllers\Login;
use App\Controllers\GoogleController;
use App\Controllers\ContactController;
use App\Controllers\Api\BookController;

/**
 * @var RouteCollection $routes
 */

// Home Routes
$routes->get('/', [Home::class, 'index']);
$routes->get('home', [Pages::class, 'home']);

// News Routes
$routes->get('news', [News::class, 'index']);
$routes->get('news/create', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

// Book Routes
$routes->get('books', [Books::class, 'index']);
$routes->get('books/create', [Books::class, 'create']);
$routes->get('books/(:segment)', [Books::class, 'view']);
$routes->post('books', [Books::class, 'store']);

// AJAX Route
$routes->get('ajax/get/(:segment)', [Ajax::class, 'get']);

// Login & Registration
$routes->get('login', [Pages::class, 'login']);
$routes->post('login/submit', [Pages::class, 'login_submit']);
$routes->post('register/submit', [Login::class, 'register_submit']);

// ? Logout Route
$routes->get('logout', [Login::class, 'logout']);

// Google Books Search
$routes->get('google/search', [GoogleController::class, 'search']);

// API Routes
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
    $routes->get('books', 'BookController::index');
    $routes->get('books/(:num)', 'BookController::show/$1');
    $routes->post('books', 'BookController::create');
    $routes->put('books/(:num)', 'BookController::update/$1');
    $routes->delete('books/(:num)', 'BookController::delete/$1');
});

// Contact Form Submission
$routes->get('pages/contact', [ContactController::class, 'index']);
$routes->post('contact/submit', [ContactController::class, 'submit']);

// Static Pages
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);   