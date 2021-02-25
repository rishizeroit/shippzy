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

      Artisan::call('config:cache');
      return "Cache is cleared";
  });
Route::group(['namespace'=>'Login', 'prefix'=>'/user'], function(){
Route::get('/login', 'LoginController@index')->name('user.login');
Route::post('/login/authenticate', 'LoginController@authenticate')->name('login.authenticate');
Route::get('/logout', 'LoginController@logout')->name('user.logout');
Route::match(['get', 'post'],'/register', 'LoginController@register')->name('user.register');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'/admin', 'middleware' => ['auth'],], function(){
      Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
       Route::resource('/customers', 'CustomerController');
       Route::resource('/services', 'ServicesController');
       Route::resource('/carriers', 'CarrierController');
});
Route::group(['namespace'=>'Carrier', 'prefix'=>'/carrier', 'middleware' => ['auth'],], function(){
      Route::get('/dashboard', 'DashboardController@dashboard')->name('carrier.dashboard');
      Route::get('/service', 'DashboardController@service')->name('carrier.service');
      Route::get('/add_service', 'DashboardController@AddService')->name('carrier.addservice');
      Route::post('/submit_service', 'DashboardController@SubmitService')->name('carrier.submitservice');
      Route::get('/show_service/{id}', 'DashboardController@ShowService')->name('carrier.showservice');
      Route::get('/edit_service/{id}', 'DashboardController@EditService')->name('carrier.editservice');
      Route::post('/update_service', 'DashboardController@UpdateService')->name('carrier.update');
      Route::resource('/my-vehicles', 'MyVehicleController');
      Route::get('/destroy_service/{id}','DashboardController@DestroyService')->name('carrier.destroyservice');
      Route::match(['get','post'],'/test','TestController@test')->name('test.meta');
});

Route::group(['namespace'=>'Web', 'prefix'=>'/'], function(){
      Route::get('/', 'WebController@index');
      Route::get('/about-us', 'WebController@about');
      Route::match(['GET','POST'],'login', 'WebController@login')->name('authenticate.login');
      Route::match(['GET','POST'],'register', 'WebController@register')->name('customer.register');
      Route::get('/logout', 'WebController@logout');

      Route::get('/test', 'WebController@test'); 
      Route::get('/getcountry', 'WebController@getCountry'); 
      Route::post('/book', 'WebController@book')->name('freights.book');
      // Route::post('/book/free-quote', 'WebController@freeQuote')->name('book.freeQuote');
      // Route::post('/book/free-quote/services', 'WebController@addServices')->name('add.services');   
});

