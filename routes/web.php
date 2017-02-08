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

Route::get('/stocks','StockController@getIndex');
Route::get('/stocks/show/{id}','StockController@getShow');

Route::post('/stocks/countPrice/{id}','StockController@postcountPrice');
Route::post('/stocks/decountPrice/{id}','StockController@postdecountPrice');

Route::post('/stocks/sell/{id}','StockController@postSell');
Route::post('/stocks/restock/{id}','StockController@postRestock');

Route::get('/stocks/addProduit','StockController@getShowFormulaire');
Route::post('/stocks/addProduit/newForm','StockController@postRequest');