<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
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

Route::prefix('admin')->group(function () {
    //user
    Route::get('/dashboard', 'Admin\UserController@dashboard');
    //category
    Route::get('/category/list','Admin\CategoryController@list')->name('admin.category.list');
    Route::get('/category/create','Admin\CategoryController@create')->name('admin.category.create');
    Route::post('/category/save','Admin\CategoryController@save')->name('admin.category.save');
    Route::delete('/category/delete/{id}','Admin\CategoryController@delete')->name('admin.category.delete');
});


//test
Route::get('/test', function () {
    return view('testsummer');
});

