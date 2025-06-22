<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\AuthController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', [AuthController::class, 'login']);
$routes->post('/login', [AuthController::class, 'attemptLogin']);
$routes->get('/logout', [AuthController::class, 'logout']);
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/', 'Dashboard::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('logout', 'AuthController::logout');
$routes->group('customer', function($routes) {
    $routes->get('/', 'CustomerController::index');
    $routes->get('create', 'CustomerController::create'); // Ubah dari 'form' ke 'create'
    $routes->get('edit/(:num)', 'CustomerController::edit/$1'); // Tambahkan route untuk edit
    $routes->post('save', 'CustomerController::save');
    $routes->get('delete/(:num)', 'CustomerController::delete/$1');
});
$routes->group('pengiriman', function($routes) {
    $routes->get('/', 'Pengiriman::index'); // Menampilkan list pengiriman
    $routes->get('create', 'Pengiriman::create'); // Form create pengiriman
    $routes->post('save', 'Pengiriman::save'); // Menyimpan data pengiriman
    $routes->get('edit/(:segment)', 'Pengiriman::edit/$1'); // Form edit pengiriman
    $routes->put('update/(:segment)', 'Pengiriman::update/$1'); // Update data pengiriman
    $routes->get('view/(:segment)', 'Pengiriman::view/$1'); // View detail pengiriman
    $routes->delete('delete/(:segment)', 'Pengiriman::delete/$1'); // Hapus pengiriman
});
$routes->group('settings', function($routes) {
    $routes->get('/', 'Settings::index');
    $routes->post('update', 'Settings::updateProfile');
    $routes->get('password', 'Settings::password');
    $routes->post('password/update', 'Settings::updatePassword');
    $routes->get('terms', 'Settings::terms');
    $routes->get('privacy', 'Settings::privacy');
    $routes->get('customer-service', 'Settings::customerService');
});