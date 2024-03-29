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



//=============================POST=================
$routes->get('/login', 'Login::index');
$routes->post('/checkLogin', 'Login::check_user_login');
$routes->get('/logout', 'Login::user_logout');


$routes->get('/users', 'Users::index');
$routes->post('/add_user', 'Users::add_user');
$routes->post('/edit_user', 'Users::edit_user');
$routes->post('/del_user', 'Users::delete_user');


$routes->get('/sell', 'Sell::index');
$routes->get('/sale_all', 'Sell::sale_all');
$routes->post('/add_order', 'Sell::add_order');


$routes->get('/order_detail', 'Order::order_detail');
$routes->get('/sales_specially', 'Order::sales_specially');
$routes->get('/sales_dangerous', 'Order::sales_dangerous');


$routes->get('/pharmacies', 'Pharmacies::index');
$routes->post('/add_pharmacy', 'Pharmacies::add_pharmacy');
$routes->post('/edit_pharmacy', 'Pharmacies::edit_pharmacy');
$routes->post('/del_pharmacy', 'Pharmacies::delete_pharmacy');



$routes->get('/sale_all', 'Sale::sale_all');
$routes->get('/sale_today', 'Sale::sale_today');
$routes->get('/sale_week', 'Sale::sale_week');
$routes->get('/sale_test', 'Sale::sale_test');


$routes->get('/pharmacy_type', 'Management::pharmacies_type');
$routes->post('/add_pharmacy_type', 'Management::add_pharmacy_type');
$routes->post('/delete_pharmacy_type', 'Management::delete_pharmacy_type');


$routes->get('/recive_type', 'Management::recive_type');
$routes->post('/add_recive_type', 'Management::add_recive_type');
$routes->post('/delete_recive_type', 'Management::delete_recive_type');


$routes->get('/user_role', 'Management::user_role');


$routes->get('/supplier', 'Supplier::supplier');
$routes->post('/add_supplier', 'Supplier::add_supplier');
$routes->post('/edit_supplier', 'Supplier::edit_supplier');
$routes->post('/del_supplier', 'Supplier::del_supplier');


$routes->get('/lot', 'Lot::index');
$routes->post('/add_lot', 'Lot::add_lot');
$routes->post('/edit_lot', 'Lot::edit_lot');
$routes->post('/del_lot', 'Lot::del_lot');
$routes->get('/remain', 'Lot::remain');
$routes->get('/exp_date', 'Lot::exp_date');
$routes->get('/lot_detail', 'Lot::lot_detail');



$routes->get('/inventory', 'Inventory::index');





/*===================APIs======================*/
$routes->get('/api/(:any)', 'APIs::get_api/$1');
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
