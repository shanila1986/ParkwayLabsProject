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

// dashBord page
Route::get('/', function () {
    return App::make('App\Http\Controllers\BackendController')->dashBoard();
});


// department page
Route::get('/department', function () {
    return App::make('App\Http\Controllers\BackendController')->department();
});


// insert department 
Route::get('/addDepartment', function () {
    return App::make('App\Http\Controllers\BackendController')->insertDepartment();
});


// employees page
Route::get('/employees', function () {
    return App::make('App\Http\Controllers\BackendController')->employees();
});


// insert employees 
Route::get('/addEmployee', function () {
    return App::make('App\Http\Controllers\BackendController')->insertEmployees();
});
