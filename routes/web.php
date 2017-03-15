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
    return view('oauth');
})->middleware('auth');

Route::get('/public_api', function () {
    return ["result" => "This is a public api."];
});

Route::get('/need_token_api', function () {
    return ["result" => "The access token works."];
})->middleware('auth:api');

Auth::routes();

Route::get('/home', 'HomeController@index');
