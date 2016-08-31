<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

$this->get('login', 'Auth\AuthController@showLoginForm');
$this->post('login', 'Auth\AuthController@login');
$this->get('logout', 'Auth\AuthController@logout');

// Registration Routes...
$this->get('register', 'Auth\AuthController@showRegistrationForm');
$this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
$this->post('password/reset', 'Auth\PasswordController@reset');


/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | This route group applies the "web" middleware group to every route
  | it contains. The "web" middleware group is defined in your HTTP
  | kernel and includes session state, CSRF protection, and more.
  |
 */

// Route::get('admin', ['middleware' => 'admin', 'uses' => 'AdminController@index']);


Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    //Dashboard Route
    
    Route::get('dashboard', 'AdminController@index');


    Route::resource('home', 'EShopDataEntry\BrandsController');
    //EShop Data Entry Routes
    Route::resource('brands', 'EShopDataEntry\BrandsController');
    Route::resource('categories', 'EShopDataEntry\categoriesController');
    Route::resource('products', 'EShopDataEntry\ProductsController');

    //EShop Transactions Routes
    Route::resource('customers', 'EShopTransactions\CustomersController');
    Route::resource('orders', 'EShopTransactions\OrdersController');
    Route::resource('product-sales', 'EShopTransactions\ProductSalesController');

    //Frontend Data Entry Routes
    Route::resource('blog-posts', 'FrontendDataEntry\BlogPostsController');
    Route::resource('pages', 'FrontendDataEntry\PagesController');

    //System
    Route::resource('system-users', 'System\UsersController');
    
    });





Route::get('/home', 'HomeController@index');
