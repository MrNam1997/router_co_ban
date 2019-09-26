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


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/hello_laravel', function () {
//    return view('hello_laravel', ['name' => 'van nam']);
//});
Route::get('/hello_laravel/{name?}', function ($name = 'hanh') {
    echo 'user name is '.$name;
});
Route::get('/wellcomeHome','HomeController@index');

