<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// Add these routes for your Auth controller
$routes->get('auth', 'Auth::index'); // Route for the Login page
$routes->get('auth/register', 'Auth::register'); // Route for the Registration page
$routes->post('auth/registerUser', 'Auth::registerUser');
$routes->post('auth/loginUser', 'Auth::loginUser');
$routes->get('/dashboard', 'Auth::dashboard');
$routes->get('/auth/logout', 'Auth::logout');
$routes->post('/auth/upload', 'Auth::upload'); // Route for image upload
$routes->get('/auth/verify', 'Auth::verify'); // Route for OTP verification page
$routes->get('/auth/blog', 'Auth::blog'); // Route for OTP verification page
$routes->get('/auth/blogform', 'Auth::blogform'); // Route for OTP verification page
$routes->post('/auth/verifyOtp', 'Auth::verifyOtp'); // Route for OTP verification form submission