<?php

use Illuminate\Support\Facades\Artisan;
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
    Route::get('/clear', function() {

        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');

        return "Cleared!";

     });
	// Route::get('/', 'Home\HomeController@index')->name('home');
    Route::get('/profileDownload', 'Home\HomeController@profileDownload')->name('profileDownload');
    // Route::get('/fileDownload', '../../../'.asset('download/profile.pdf'))->name('fileDownload');

	Route::post('/contact', 'Home\HomeController@contact')->name('contact');
	Route::get('/contactPage', 'Home\HomeController@contactPage')->name('contactPage');
	Route::post('/promoters', 'Home\HomeController@promoters')->name('promoters');
    Route::get('/','Home\CategoryControlelr@index')->name('home');
    Route::get('/category/{id}','Home\CategoryControlelr@show')->name('category');
    Route::get('/projects','Home\ProjectControlelr@index')->name('projects');
    Route::get('/project/{id}','Home\ProjectControlelr@show')->name('project');

    // Route::get('/admin', 'Admin\DashboardController@index')->name('home');


});



Auth::routes(['register' => false]);

