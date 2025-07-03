<?php

use CodeIgniter\Router\RouteCollection;
<<<<<<< HEAD
use App\Controllers\Home;
use App\Controllers\News;
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
use App\Controllers\Pages;
use App\Controllers\Books;
use App\Controllers\Ajax;
use App\Controllers\Login;
<<<<<<< HEAD
use App\Controllers\GoogleController;
use App\Controllers\ContactController;
use App\Controllers\Api\BookController;
=======
use App\Controllers\Api\BookController;
use App\Controllers\GoogleController;
use App\Controllers\ContactController; // ?? Added for contact form
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7

/**
 * @var RouteCollection $routes
 */

// Home Routes
<<<<<<< HEAD
$routes->get('/', [Home::class, 'index']);
$routes->get('home', [Pages::class, 'home']);

// News Routes
$routes->get('news', [News::class, 'index']);
$routes->get('news/create', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);

=======
$routes->get('/', 'Home::index');
$routes->get('home', [Pages::class, 'home']);

>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
// Book Routes
$routes->get('books', [Books::class, 'index']);
$routes->get('books/create', [Books::class, 'create']);
$routes->get('books/(:segment)', [Books::class, 'view']);
$routes->post('books', [Books::class, 'store']);

<<<<<<< HEAD
// AJAX Route
$routes->get('ajax/get/(:segment)', [Ajax::class, 'get']);
=======
// AJAX Routes
$routes->get('ajax/get/(:segment)', 'Ajax::get/$1');
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7

// Login & Registration
$routes->get('login', [Pages::class, 'login']);
$routes->post('login/submit', [Pages::class, 'login_submit']);
$routes->post('register/submit', [Login::class, 'register_submit']);

<<<<<<< HEAD
// ? Logout Route
$routes->get('logout', [Login::class, 'logout']);

// Google Books Search
$routes->get('google/search', [GoogleController::class, 'search']);

// API Routes
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function ($routes) {
=======
// Google Books Search (Current Working Setup)
$routes->get('google/search', [GoogleController::class, 'search']);

// API Routes (for possible use in GoogleController or frontend)
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes) {
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
    $routes->get('books', 'BookController::index');
    $routes->get('books/(:num)', 'BookController::show/$1');
    $routes->post('books', 'BookController::create');
    $routes->put('books/(:num)', 'BookController::update/$1');
    $routes->delete('books/(:num)', 'BookController::delete/$1');
});

<<<<<<< HEAD
// Contact Form Submission
$routes->get('pages/contact', [ContactController::class, 'index']);
$routes->post('contact/submit', [ContactController::class, 'submit']);

// Static Pages
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);   
=======
// ?? Contact Form Submission Route
$routes->post('contact/submit', [ContactController::class, 'submit']);

// Static Pages (fallback)
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
