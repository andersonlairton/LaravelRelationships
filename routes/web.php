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
Route::get("one-to-one","OneToOneController@oneToOne");
Route::get("one-to-one-insert","OneToOneController@insert");
Route::get("one-to-one-inverse","OneToOneController@inverse");
Route::get('/one-to-many',"OnetoManyController@oneToMany");
Route::get("one-to-many-insert","OnetoManyController@insert");
