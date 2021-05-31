<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/user', function () {
//     return view('user');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user','Crud\UserController@index');
Route::post('save','Crud\UserController@store');
Route::get('user_show','Crud\UserController@show');
Route::get('user/delete/{id}','Crud\UserController@delete');
