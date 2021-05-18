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

Route::get('/', function () {
    return view('index');
});
Route::get('/service/1', function () {
    return view('drycleaning');
});
Route::get('/checkout', function () {
    return view('check-out');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/s', function () {
    return view('dash views.layouts.master');
});


Auth::routes();
Route::group(['middleware' => ['auth']], function() {
//dashboard routes

  Route::get('/service_cat', 'ServicesCatController@index')->name('service_cat.index');
  Route::get('/service_cat/create', 'ServicesCatController@create')->name('service_cat.create');
  Route::post('/service_cat/store', 'ServicesCatController@store')->name('service_cat.store');
  Route::get('/service_cat/edit/{id}', 'ServicesCatController@edit')->name('service_cat.edit');
  Route::post('/service_cat/update/{id}', 'ServicesCatController@update')->name('service_cat.update');
  Route::delete('/service_cat/{id}', 'ServicesCatController@destroy')->name('service_cat.destroy');

  Route::get('/service', 'ServiceController@index')->name('service.index');
  Route::get('/service/create', 'ServiceController@create')->name('service.create');
  Route::post('/service/store', 'ServiceController@store')->name('service.store');
  Route::get('/service/edit/{id}', 'ServiceController@edit')->name('service.edit');
  Route::post('/service/update/{id}', 'ServiceController@update')->name('service.update');
  Route::delete('/service/{id}', 'ServiceController@destroy')->name('service.destroy');

  Route::get('/place_type', 'PlaceTypeController@index')->name('place_type.index');
  Route::get('/place_type/create', 'PlaceTypeController@create')->name('place_type.create');
  Route::post('/place_type/store', 'PlaceTypeController@store')->name('place_type.store');
  Route::get('/place_type/edit/{id}', 'PlaceTypeController@edit')->name('place_type.edit');
  Route::post('/place_type/update/{id}', 'PlaceTypeController@update')->name('place_type.update');
  Route::delete('/place_type/{id}', 'PlaceTypeController@destroy')->name('place_type.destroy');

  Route::get('/service_provider', 'ServiceProviderController@index')->name('service_provider.index');
  Route::get('/service_provider/create', 'ServiceProviderController@create')->name('service_provider.create');
  Route::post('/service_provider/store', 'ServiceProviderController@store')->name('service_provider.store');
  Route::get('/service_provider/edit/{id}', 'ServiceProviderController@edit')->name('service_provider.edit');
  Route::post('/service_provider/update/{id}', 'ServiceProviderController@update')->name('service_provider.update');
  Route::delete('/service_provider/{id}', 'ServiceProviderController@destroy')->name('service_provider.destroy');

  Route::get('/item', 'ItemController@index')->name('home');
  Route::get('/item/create', 'ItemController@create')->name('item.create');
  Route::post('/item/store', 'ItemController@store')->name('item.store');
  Route::get('/item/edit/{id}', 'ItemController@edit')->name('item.edit');
  Route::post('/item/update/{id}', 'ItemController@update')->name('item.update');
  Route::delete('/item/{id}', 'ItemController@destroy')->name('item.destroy');



Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');
});
