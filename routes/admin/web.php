<?php

use Illuminate\Support\Facades\Route;




Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->group(
        function () {

        Route::get('/dashboard', 'DashboardController@index')->name('home');
        Route::resource('categories', 'CategoryController');
        Route::resource('projects', 'ProjectController');
        Route::resource('properties', 'PropertieController');
        Route::resource('apartments', 'ApartmentController');
        Route::resource('facilities', 'FacilityController');
    Route::post('/check/{id}','ApartmentController@check')->name('apartments.check');

        }
    );
