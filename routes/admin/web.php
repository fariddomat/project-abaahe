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
            Route::post('/check/{id}', 'ApartmentController@check')->name('apartments.check');

            Route::resource('facilities', 'FacilityController');

            Route::get('/settings/cover', 'SettingController@cover')->name('setting.cover');
            Route::post('/settings/change_cover', 'SettingController@change_cover')->name('setting.change_cover');
            Route::get('/settings/logs', 'SettingController@logs')->name('setting.logs');
            Route::get('/settings/settings', 'SettingController@settingsText')->name('setting.settingsText');
            Route::post('/settings/setting', 'SettingController@settings')->name('setting.settings');
        }
    );
