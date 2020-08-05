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
    return view("layouts.index");
});
//Route::get('home', function (){
//    return view("admin.list");
//});
//Route::get('/admin/movieModel/list', function () {
//    return view("admin.list");
//});

Route::get('/admin/movieModel/list', 'MovieMng@displayListMovie');
Route::get('/edit/{id}', 'MovieMng@editMovie');
Route::get('/admin/movieModel/add', function () {
    return view("admin.form");
});
//Route::get('/admin/movieModel/list','MovieMng@addNew');
Route::post('/admin/movieModel/add', 'MovieMng@addNewMovie')->name('/admin/movieModel/add');

Route::post('/updateMovie/{id}', 'MovieMng@updateMovie')->name('updateMovie');

Route::post('/deleteMovie/{id}', 'MovieMng@deleteMovie')->name('deleteMovie');
