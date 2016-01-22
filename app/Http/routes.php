<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
}); */

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

Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['auth']], function () {

        Route::get('/', 'MillController@index');

        Route::get('/bazar', 'BazarController@index');

        Route::get('/deposit', 'DepositController@index');

        Route::get('/total', 'TotalController@index');

    });


    Route::group(['middleware' => ['auth','admin']], function () {

        Route::get('/users', 'UserController@index');
        Route::get('/users/create','UserController@create');
        Route::post('/users','UserController@store');
        Route::get('/users/{id}','UserController@delete');
        Route::get('/users/{id}/edit','UserController@edit');
        Route::patch('/users/{id}','UserController@update');

        Route::get('/meals', 'MillController@mill');
        Route::get('/meals/create','MillController@create');
        Route::post('/meals','MillController@store');
        Route::get('/meals/{id}/edit','MillController@edit');
        Route::patch('/meals/{id}','MillController@update');
        Route::get('/meals/{id}','MillController@delete');

        Route::get('/bazars', 'BazarController@bazar');
        Route::get('/bazars/create','BazarController@create');
        Route::post('/bazars','BazarController@store');
        Route::get('/bazars/{id}/edit','BazarController@edit');
        Route::patch('/bazars/{id}','BazarController@update');
        Route::get('/bazars/{id}','BazarController@delete');

        Route::get('/deposits', 'DepositController@deposit');
        Route::get('/deposits/createcredit','DepositController@createcredit');
        Route::get('/deposits/createdebit','DepositController@createdebit');
        Route::post('/depositscredit','DepositController@storecredit');
        Route::post('/depositsdebit','DepositController@storedebit');
        Route::get('/deposits/{id}/edit','DepositController@edit');
        Route::patch('/deposits/{id}','DepositController@update');
        Route::get('/deposits/{id}','DepositController@delete');

        Route::get('/bills', 'BillController@index');
        Route::get('/bills/create','BillController@create');
        Route::post('/bills', 'BillController@store');
        Route::get('/bills/{id}/edit','BillController@edit');
        Route::patch('/bills/{id}','BillController@update');
        Route::get('/bills/{id}','BillController@delete');

    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

   // Route::get('/', 'HomeController@index');

});
