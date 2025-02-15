<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// routes home
$routes->get('/', 'Home\Home::index');

// routes admin
$routes->get('/admin', 'Admin\Admin::index');
// $routes->get('/admin/(:segment)', 'Admin\Admin::$1');

// routes customer
$routes->get('/customer', 'Customer\Customer::index');
$routes->get('/customer/(:segment)', 'Customer\Customer::$1');

//routes login
$routes->get('/login', 'Login\Login::index');
$routes->get('/login/pages/(:segment)', 'Login\Login::$1');

// routes spareparts admin
$routes->get('/admin/spareparts', 'Admin\Spareparts\Spareparts::index');
$routes->get('/admin/spareparts/(:segment)', 'Admin\Spareparts\Spareparts::$1');

// routes booking admin
$routes->get('/admin/booking', 'Admin\Booking\Booking::index');

// routes mekanik admin
$routes->get('/admin/mekanik', 'Admin\Mekanik\Mekanik::index');

// routes member admin
$routes->get('/admin/member', 'Admin\Member\Member::index');

// routes pembayaran admin
$routes->get('/admin/pembayaran', 'Admin\Pembayaran\Pembayaran::index');

// routes penjualan admin
$routes->get('/admin/penjualan', 'Admin\Penjualan\Penjualan::index');

// routes service admin
$routes->get('/admin/service', 'Admin\Service\Service::index');












/*


Placeholders are simply strings that represent a Regular Expression pattern. During the routing process, these placeholders are replaced with the value of the Regular Expression. They are primarily used for readability.

The following placeholders are available for you to use in your routes:

(:any)	    = will match all characters from that point to the end of the URI. This may include multiple URI segments.
(:segment)  = will match any character except for a forward slash (/) restricting the result to a single segment.
(:num)	    = will match any integer.
(:alpha)	= will match any string of alphabetic characters
(:alphanum)	= will match any string of alphabetic characters or integers, or any combination of the two.
(:hash)	    = is the same as (:segment), but can be used to easily see which routes use hashed ids (see the Model docs).

*/




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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
