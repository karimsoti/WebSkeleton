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
    return view('welcome');
});

Route::get('/dd', function() {

//    $PS = new \App\Services\PhotographyService("wedding photoshoot", "wedding photos", "wedding");
//
//    dd($PS);

    logger('fsdfasdfasdfsdafsdfasdfasdfzsdfa');
});


/**
 * Site navigation Routes
 */
Route::get('/about', 'NavigationController@toAboutPage');
Route::get('/services', 'NavigationController@toServicesPage');
Route::get('/portfolio', 'NavigationController@toPortfolioPage');
Route::get('/contact', 'NavigationController@toContactPage');
Route::get('/price', 'NavigationController@toPricePage');
Route::get('/blog', 'NavigationController@toBlogPage');


/**
 * Image handler routes
 */
Route::post('storeImage', 'ImageStoringController@storeImage');



/**
 * Service (products) routes    
 * Migration and controller functions need to be changed accordingly 
 */
Route::get('/addService', 'ServiceController@addService');
Route::post('/deleteService/{id}', 'ServiceController@deleteService');
Route::get('/getServices', 'ServiceController@getAllServices');
Route::get('/getServiceById/{id}', 'ServiceController@getServiceById');





