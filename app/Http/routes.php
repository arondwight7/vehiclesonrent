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
    
    return view('home');
    Auth::loginUsingId(2);
});
Route::auth();
Route::get('/about', 'PagesController@index');

Route::get('/twowheelers', 'PagesController@twowheelers'); 
Route::get('/twowheelergear', 'PagesController@twowheelergear'); 

Route::get('/fourwheelersedan', 'PagesController@fourwheelersedan'); 
Route::get('/fourwheelersuv', 'PagesController@fourwheelersuv'); 
Route::get('/attachsuccess', 'PagesController@attachsuccess'); 
 
Route::get('/profile', 'ProfilesController@show');

Route::post('/attach', 'ownerController@insert');
Route::post('/attachsuccess', 'vehicleController@attach');

Route::get('/checkout2', 'PagesController@checkout2');
Route::get('/checkout3', 'PagesController@checkout3');
Route::get('/checkout4', 'PagesController@checkout4');
Route::get('/checkout5', 'PagesController@checkout5');

Route::get('/acknowledge', 'PagesController@acknowledge');
Route::get('/acknowledge1', 'PagesController@acknowledge1');
Route::get('/acknowledge2', 'PagesController@acknowledge2');
Route::get('/acknowledge3', 'PagesController@acknowledge3');

Route::get('/payment', 'PagesController@payment');
Route::get('/payment1', 'PagesController@payment1');
Route::get('/payment2', 'PagesController@payment2');
Route::get('/payment3', 'PagesController@payment3');

Route::post('/payment', 'customerController@insert');
Route::post('/payment1', 'customerController1@insert');
Route::post('/payment2', 'customerController2@insert');
Route::post('/payment3', 'customerController3@insert');


Route::get('/checkout2', [
	'uses' => 'sedanController@getcheckout',
	'as' => 'checkout2'
	]);
Route::get('/checkout3', [
	'uses' => 'suvController@getcheckout',
	'as' => 'checkout3'
	]);
Route::get('/checkout4', [
	'uses' => 'hatchbackController@getcheckout',
	'as' => 'checkout4'
	]);
Route::get('/checkout5', [
	'uses' => 'gearController@getcheckout',
	'as' => 'checkout5'
	]);

Route::post('/acknowledge', [
	'uses' => 'sedanController@postcheckout',
	'as' => 'acknowledge'
	]);

Route::post('/acknowledge1', [
	'uses' => 'suvController@postcheckout',
	'as' => 'acknowledge1'
	]);

Route::post('/acknowledge2', [
	'uses' => 'hatchbackController@postcheckout',
	'as' => 'acknowledge2'
	]);

Route::post('/acknowledge3', [
	'uses' => 'gearController@postcheckout',
	'as' => 'acknowledge3'
	]);



Route::get('/admin', 'PagesController@admin');
Route::get('/attach', 'PagesController@attach');

Route::get('/twowheelergear', [
	'uses' => 'gearController@getgear',
	'as' => 'twowheelergear'
	]);

Route::get('/twowheelermoped', [
	'uses' => 'mopedController@getmoped',
	'as' => 'twowheelermoped'
	]);

Route::get('/twowheelers', [
	'uses' => 'hatchbackController@gethatchback',
	'as' => 'twowheelers'
	]);

Route::get('/fourwheelersedan', [
	'uses' => 'sedanController@getsedan',
	'as' => 'fourwheelersedan'
	]);

Route::get('/fourwheelersuv', [
	'uses' => 'suvController@getsuv',
	'as' => 'fourwheelersuv'
	]);
Route::get('/book-a-sedan/{id}', [
	'uses' =>'sedanController@getbookasedan',
	'as' => 'sedan.bookasedan'
	]);

Route::get('/booking-cart', [
	'uses' =>'sedanController@getCart',
	'as' => 'sedan.bookingCart'
	]);
//Route::get('/deletesedan/{id}','sedanController@deletecat');

Route::get('/book-a-suv/{id}', [
	'uses' =>'suvController@getbookasuv',
	'as' => 'sedan.bookasuv'
	]);

Route::get('/booking-suvcart', [
	'uses' =>'suvController@getsuvCart',
	'as' => 'suv.bookingCart'
	]);

Route::get('/book-a-hatchback/{id}', [
	'uses' =>'hatchbackController@getbookahatchback',
	'as' => 'sedan.bookahatchback'
	]);

Route::get('/booking-hatchbackcart', [
	'uses' =>'hatchbackController@gethatchbackCart',
	'as' => 'hatchback.bookingCart'
	]);

Route::get('/book-a-gear/{id}', [
	'uses' =>'gearController@getbookagear',
	'as' => 'sedan.bookagear'
	]);

Route::get('/booking-gearcart', [
	'uses' =>'gearController@getgearCart',
	'as' => 'gear.bookingCart'
	]);


Route::get('/home', 'HomeController@index');
