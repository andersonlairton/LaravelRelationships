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
Route::get("one-to-one","OneToOneController@oneToOne");
Route::get("one-to-one-inverse","OneToOneController@inverse");
Route::get('/', function () {
    return view('welcome');
});
