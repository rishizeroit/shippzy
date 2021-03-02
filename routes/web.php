<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cache-clear', function() {

      Artisan::call('cache:clear');
      return "Cache is cleared";
  });
Route::group(['namespace'=>'Login', 'prefix'=>'/user'], function(){
Route::get('/login', 'LoginController@index')->name('user.login');
Route::post('/login/authenticate', 'LoginController@authenticate')->name('login.authenticate');
Route::get('/logout', 'LoginController@logout')->name('user.logout');
Route::match(['get', 'post'],'/register', 'LoginController@register')->name('user.register');
Route::get('/verify-email/{id}', 'LoginController@verifyEmail')->name('verify.email');
});


Route::group(['namespace'=>'Admin', 'prefix'=>'/admin', 'middleware' => ['auth'],], function(){
      Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
       Route::resource('/customers', 'CustomerController');
       Route::resource('/services', 'ServicesController');
       Route::resource('/carriers', 'CarrierController');
});
Route::group(['namespace'=>'Carrier', 'prefix'=>'/carrier', 'middleware' => ['auth'],], function(){
      Route::get('/dashboard', 'DashboardController@dashboard')->name('carrier.dashboard');
      Route::resource('service/prices','ServicePriceController');
      Route::resource('/my-vehicles', 'MyVehicleController');
      Route::match(['get','post'],'/test','TestController@test')->name('test.meta');
});

Route::group(['namespace'=>'Web', 'prefix'=>'/'], function(){
      Route::get('/', 'WebController@index');
      Route::get('/about-us', 'WebController@about');
      Route::get('/contact-us', 'WebController@contact');
      Route::get('/full-truck-form', 'WebController@full_truck_form');
      Route::get('/less-truck-form', 'WebController@less_truck_form');
      Route::get('/auto-truck-form', 'WebController@auto_truck_form');
      Route::get('/freight-class', 'WebController@freight_class');
      Route::get('/ltl-shipment', 'WebController@ltl_shipment');
      Route::get('/liftgate', 'WebController@liftgate');
      Route::get('/ftl-shipment', 'WebController@ftl_shipment');
      Route::get('/partial-shipment', 'WebController@partial_shipment');
      Route::get('/volume-shipment', 'WebController@volume_shipment');
      Route::get('/trailer-types', 'WebController@trailer_types');
      Route::get('/limited-access', 'WebController@limited_access');
      Route::get('/pallet-skid', 'WebController@pallet_skid');
      Route::match(['GET','POST'],'login', 'WebController@login')->name('authenticate.login');
      Route::match(['GET','POST'],'register', 'WebController@register')->name('customer.register');
      Route::get('/email-verify/{id}', 'WebController@emailVerify')->name('email.verify');
      Route::get('/logout', 'WebController@logout');

      Route::get('/test', 'WebController@test'); 
      Route::get('/getcountry', 'WebController@getCountry'); 
      Route::post('/book', 'WebController@book')->name('freights.book');
      // Route::post('/book/free-quote', 'WebController@freeQuote')->name('book.freeQuote');
      // Route::post('/book/free-quote/services', 'WebController@addServices')->name('add.services');   
});

