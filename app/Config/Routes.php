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
// $routes->get('/', 'Home::index');
// $routes->get('/todolist', 'Todolist::index');
// $routes->post('/todolist/addTask', 'Todolist::addTask');
// $routes->get('/todolist/markAsDone/(:num)', 'Todolist::markAsDone/$1');
// $routes->get('/todolist/deleteTask/(:num)', 'Todolist::deleteTask/$1');
// $routes->get('ktp', 'Ktp::index');
// $routes->get('ktm', 'Ktm::index');
// $routes->get('inputData', 'Pesan::input');
// $routes->get('submit', 'Pesan::submit');
// $routes->get('input', 'PesanController::input');
// $routes->get('proses', 'PesanController::proses');

use App\Controllers\LoginController;

$routes->get('login', [LoginController::class, 'index']);
$routes->get('login/home', [LoginController::class, 'home']);
$routes->get('login/logout', [LoginController::class, 'logout']);
$routes->match(['get', 'post'], 'login/check', [LoginController::class, 'check']);

// $routes->get('login/home', [Login::class, 'home']);
// $routes->get('login/logout', [Login::class, 'logout']);
// $routes->get('login', [Login::class, 'index']);




// use App\Controllers\Login;

// $routes->get('login/home', [Login::class, 'home']);
// $routes->get('login/logout', [Login::class, 'logout']);
// $routes->get('login', [Login::class, 'index']);
// $routes->match(['get', 'post'], 'login/check', [Login::class, 'check']);

use App\Controllers\AsistenController;

$routes->get('asisten', [AsistenController::class, 'index']);

$routes->match(['get', 'post'], 'asisten/simpan', [AsistenController::class, 'simpan']);
$routes->match(['get', 'post'], 'asisten/update', [AsistenController::class, 'update']);
$routes->match(['get', 'post'], 'asisten/delete', [AsistenController::class, 'delete']);

//untuk table asisten
//$routes->get('asisten', [AsistenController::class, 'index']);

//routes untuk rpl
//$routes->get('pages', 'Pages::index');
//$routes->get('login', 'Pages::login');
//$routes->get('regis', 'Pages::registrasi');
//$routes->get('member', 'Pages::member');
//$routes->POST('proses_add_member', 'Pages::proses_add_member');
//lainnya
//$routes->get('news/(:segment)', [News::class, 'view']);
//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('(:segment)', [Pages::class, 'view']);
//$routes->get('asisten', 'AsistenController::index');
use App\Controllers\News;
use App\Controllers\Pages;

$routes->match(['get', 'post'], 'news/create', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'view']);
$routes->get('news', [News::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);


//praktikum bersama


//$routes->get('news/(:segment)', [News::class, 'view']);
//$routes->get('news', [News::class, 'index']);
//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('(:segment)', [Pages::class, 'view']);


//$routes->get('/todolist', 'Todolist::index');
//use App\Controllers\Pages;

//$routes->get('pages', [Pages::class, 'index']);
//$routes->get('(:segment)', [Pages::class, 'view']);
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