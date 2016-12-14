<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return App::make('App\Http\Controllers\BackendController')->dashBoard();
});

Route::get('/department', function () {
    return App::make('App\Http\Controllers\BackendController')->department();
});

Route::get('/addDepartment', function () {
    return App::make('App\Http\Controllers\BackendController')->insertDepartment();
});

Route::get('/employees', function () {
    return App::make('App\Http\Controllers\BackendController')->employees();
});

Route::get('/addEmployee', function () {
    return App::make('App\Http\Controllers\BackendController')->insertEmployees();
});
