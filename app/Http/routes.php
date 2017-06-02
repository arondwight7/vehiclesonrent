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
 
//Route::get('/profile', 'ProfilesController@show');

Route::post('/attach', 'ownerController@insert');
Route::post('/attachsuccess', 'vehicleController@attach');

//Route::get('/checkout2', 'PagesController@checkout2');
//Route::get('/checkout3', 'PagesController@checkout3');
//Route::get('/checkout4', 'PagesController@checkout4');
//Route::get('/checkout5', 'PagesController@checkout5');

Route::get('/acknowledge', 'PagesController@acknowledge');
Route::get('/acknowledge1', 'PagesController@acknowledge1');
Route::get('/acknowledge2', 'PagesController@acknowledge2');
Route::get('/acknowledge3', 'PagesController@acknowledge3');

Route::get('/payment', 'PagesController@payment');
Route::get('/payment1', 'PagesController@payment1');
Route::get('/payment2', 'PagesController@payment2');
Route::get('/payment3', 'PagesController@payment3');
Route::get('/finalacknowledgement/{id}', 'billController@fdis'); //display
Route::post('/finalacknowledgement/{id}', 'billController@insert'); //display
Route::post('/payment', 'customerController@insert');
Route::post('/payment1', 'customerController1@insert');
Route::post('/payment2', 'customerController2@insert');
Route::post('/payment3', 'customerController3@insert');

Route::get('/orders', 'PagesController@orders');

Route::get('/terms', 'PagesController@terms');

Route::get('/feedback', 'PagesController@feedback');

Route::get('/feedsuccess', 'PagesController@feedsuuccess');

Route::get('/settlepayment2/{id}', 'settleController@settlepayment2');
Route::get('/settlepayment', 'settleController@viewsettle'); 

Route::get('/adminavail', 'availableController@suv');

Route::post('/feedsuccess', 'feedbackController@insert');

Route::post('/calculatesettle','settleController@calculate');


Route::get('/orders', [
	'uses' => 'sedanController@getProfile',
	'as' => 'orders',
	'middleware' => 'auth'
	]);

Route::get('/checkout2/{vregno}', [
	'uses' => 'sedanController@getcheckout',
	'as' => 'checkout2',
	'middleware' => 'auth'
	]);
Route::get('/checkout3/{vregno}', [
	'uses' => 'suvController@getcheckout',
	'as' => 'checkout3',
	'middleware' => 'auth'
	]);
Route::get('/checkout4/{vregno}', [
	'uses' => 'hatchbackController@getcheckout',
	'as' => 'checkout4',
	'middleware' => 'auth'
	]);
Route::get('/checkout5/{vregno}', [
	'uses' => 'gearController@getcheckout',
	'as' => 'checkout5',
	'middleware' => 'auth'
	]);

Route::post('/acknowledge', [
	'uses' => 'sedanController@postcheckout',
	'as' => 'acknowledge',
	'middleware' => 'auth'
	]);

Route::post('/acknowledge1', [
	'uses' => 'suvController@postcheckout',
	'as' => 'acknowledge1',
	'middleware' => 'auth'
	]);

Route::post('/acknowledge2', [
	'uses' => 'hatchbackController@postcheckout',
	'as' => 'acknowledge2'
	]);

Route::post('/acknowledge3', [
	'uses' => 'gearController@postcheckout',
	'as' => 'acknowledge3',
	'middleware' => 'auth'
	]);



Route::get('/admin', 'PagesController@admin');
Route::get('/attach', 'PagesController@attach');

Route::get('/twowheelergear', [
	'uses' => 'gearController@getgear',
	'as' => 'twowheelergear',
	'middleware' => 'auth'
	]);

Route::get('/twowheelermoped', [
	'uses' => 'mopedController@getmoped',
	'as' => 'twowheelermoped',
	'middleware' => 'auth'
	]);

Route::get('/twowheelers', [
	'uses' => 'hatchbackController@gethatchback',
	'as' => 'twowheelers',
	'middleware' => 'auth'
	]);

Route::get('/fourwheelersedan', [
	'uses' => 'sedanController@getsedan',
	'as' => 'fourwheelersedan',
	'middleware' => 'auth'
	]);

Route::get('/fourwheelersuv', [
	'uses' => 'suvController@getsuv',
	'as' => 'fourwheelersuv',
	'middleware' => 'auth'
	]);
Route::get('/book-a-sedan/{id}', [
	'uses' =>'sedanController@getbookasedan',
	'as' => 'sedan.bookasedan',
	'middleware' => 'auth'
	]);

Route::get('/booking-cart', [
	'uses' =>'sedanController@getCart',
	'as' => 'sedan.bookingCart',
	'middleware' => 'auth'
	]);
//Route::get('/deletesedan/{id}','sedanController@deletecat');

Route::get('/book-a-suv/{id}', [
	'uses' =>'suvController@getbookasuv',
	'as' => 'sedan.bookasuv',
	'middleware' => 'auth'
	]);

Route::get('/booking-suvcart', [
	'uses' =>'suvController@getsuvCart',
	'as' => 'suv.bookingCart',
	'middleware' => 'auth'
	]);

Route::get('/book-a-hatchback/{id}', [
	'uses' =>'hatchbackController@getbookahatchback',
	'as' => 'sedan.bookahatchback',
	'middleware' => 'auth'
	]);

Route::get('/booking-hatchbackcart', [
	'uses' =>'hatchbackController@gethatchbackCart',
	'as' => 'hatchback.bookingCart',
	'middleware' => 'auth'
	]);

Route::get('/book-a-gear/{id}', [
	'uses' =>'gearController@getbookagear',
	'as' => 'sedan.bookagear',
	'middleware' => 'auth'
	]);

Route::get('/booking-gearcart', [
	'uses' =>'gearController@getgearCart',
	'as' => 'gear.bookingCart',
	'middleware' => 'auth'
	]);


Route::get('/home', 'HomeController@index');
