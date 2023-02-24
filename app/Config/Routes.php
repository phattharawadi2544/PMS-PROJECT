<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/kmild', 'Home::f_kmild');


//=============================POST=================
$routes->get('/login', 'Login::index');
$routes->post('/checkLogin', 'Login::check_user_login');


$routes->get('/users', 'Users::index');
$routes->post('/add_user', 'Users::add_user');


$routes->get('/pharmacies', 'Pharmacies::index');
$routes->post('/add_pharmacy', 'Pharmacies::add_pharmacy');

$routes->get('/sale_all', 'Sale::sale_all');
$routes->get('/sale_today', 'Sale::sale_today');
$routes->get('/sale_week', 'Sale::sale_week');

$routes->get('/pharmacy_type', 'Management::pharmacies_type');
$routes->get('/recive_type', 'Management::recive_type');
$routes->get('/user_role', 'Management::user_role');

$routes->get('/supplier', 'Supplier::index');

$routes->get('/lot', 'Lot::index');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
