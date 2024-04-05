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

$routes->get('/', 'Home::homepage');
$routes->get('/listtwo/(:num)', 'Home::listtwo/$1');
$routes->get('/listone/(:any)', 'Home::listone/$1');
$routes->get('/listone/(:num)/(:num)', 'Home::listone/$1/$2');
$routes->get('/detail/(:any)', 'Home::detailpage/$1');
$routes->get('/cart', 'Home::cart');
$routes->get('/cartdelete/(:num)', 'Home::cartdelete/$1');
$routes->post('/cartshow', 'Home::cartshow');
$routes->post('/update_cart', 'Home::update_cart');
$routes->get('/registration', 'Home::registration');
$routes->post('/adduser', 'Home::adduser');
$routes->post('/bookproduct', 'Home::getbookdata');
$routes->post('/insertcart', 'Home::insertcart');
$routes->post('/bookdata', 'Home::bookdata');
$routes->get('/bookproduct/(:any)', 'Home::bookproduct/$1');
$routes->post('/deletecart', 'Home::deletecart');

$routes->get('/webadmin/category', 'Admin::category/$1');
$routes->post('/webadmin/addcategory', 'Admin::addcategory');
$routes->get('/webadmin/category_table', 'Admin::category_table');
$routes->get('/webadmin/edit_category/(:num)', 'Admin::catedit/$1');
$routes->post('/webadmin/editcategory', 'Admin::editcategory');

$routes->get('/webadmin/subcategory', 'Admin::subcategory');
$routes->post('/webadmin/addsubcategory', 'Admin::addsubcategory');
$routes->get('/webadmin/subcategory_table', 'Admin::subcategory_table');
$routes->get('/webadmin/edit_subcategory/(:any)', 'Admin::subcatedit/$1');
$routes->post('/webadmin/editsubcategory', 'Admin::editsubcategory');

$routes->get('/webadmin/product', 'Admin::product');
$routes->post('/webadmin/addproduct', 'Admin::addproduct');
$routes->get('/webadmin/product_table', 'Admin::product_table');
$routes->get('/webadmin/product_edit/(:num)', 'Admin::productedit/$1');
$routes->post('/webadmin/editproduct', 'Admin::editproduct');
$routes->post('/webadmin/productsubcat', 'Admin::productsubcat');

$routes->get('/webadmin/user', 'Admin::user');
$routes->post('/webadmin/addadmin', 'Admin::addadmin');
$routes->get('/webadmin/user_table', 'Admin::user_table');
$routes->get('/webadmin/user_table/edit/(:num)', 'Admin::useredit/$1');
$routes->post('/webadmin/edituser', 'Admin::edituser');

$routes->get('/webadmin/login','Admin::login');
$routes->get('/userlogin','Home::userlogin');
$routes->post('/webadmin/checklogin','Admin::checklogin');
$routes->post('/check_userlogin','Home::check_userlogin');
$routes->get('/webadmin/logout','Admin::logout');


$routes->resource('api/product', ['controller' => 'Product', 'only' => ['index', 'show', 'create', 'update', 'delete']]);

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
