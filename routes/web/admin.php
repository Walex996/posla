<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    
    Route::get('', function () {
        return view('admin.dashboard.index');
    });

    Route::get('dashboard', function () {
        return view('admin.dashboard.index');
    });

    Route::get('login', function () {
        return view('admin.auth.login');
    });

    Route::get('sample/list', function () {
        return view('admin._sample_folder.list');
    });

    Route::get('sample/form', function () {
        return view('admin._sample_folder.form');
    });

    Route::get('sample/details', function () {
        return view('admin._sample_folder.details');
    });

    Route::resource('categories', CategoryController::class)->except(['show','delete']);
});

