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

Route::group([], function()
{

	Route::get('/', 'Home\HomeController@index')->name('home');
    Route::get('/categories','Home\CategoryControlelr@index')->name('categories');
    Route::get('/category/{id}','Home\CategoryControlelr@show')->name('category');
    Route::get('/projects','Home\ProjectControlelr@index')->name('projects');
    Route::get('/project/{id}','Home\ProjectControlelr@show')->name('project');

    // Route::get('/admin', 'Admin\DashboardController@index')->name('home');


});



Auth::routes();

