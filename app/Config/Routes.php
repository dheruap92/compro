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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


$routes->group('',['namespace'=>'App\Controllers\Admin'],static function($routes){

    $routes->get('admin','DashboardController::index');

    ##### Dashboard #####
    $routes->get('dashboard','DashboardController::index');

    ##### Product #####
    $routes->get('product','ProductController::index');

    ##### Category #####
    $routes->group('category',['namespace'=>'App\Controllers\Admin'],static function($routes){
        $routes->get('','CategoryController::index');
        $routes->post('','CategoryController::store');
        $routes->get('(:num)','CategoryController::edit/$1');
        $routes->get('create','CategoryController::create');
        $routes->delete('(:num)','CategoryController::delete/$1');
        $routes->put('(:num)','CategoryController::update/$1');
    });

     ##### Menu #####
     $routes->group('menu',['namespace'=>'App\Controllers\Admin'],static function($routes){
        $routes->get('','MenuController::index');
        $routes->post('','MenuController::store');
        $routes->get('(:num)','MenuController::edit/$1');
        $routes->get('create','MenuController::create');
        $routes->delete('(:num)','MenuController::delete/$1');
        $routes->put('(:num)','MenuController::update/$1');
    });
});

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
