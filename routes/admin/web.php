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
            Route::post('projects/sortable','ProjectController@sort');
            
            Route::resource('properties', 'PropertieController');
            Route::resource('promoters', 'PromoterController');
            Route::get('/notify', 'PromoterController@notify')->name('promoters.notify');
            Route::post('/send_mail', 'PromoterController@send_mail')->name('send_mail');

            Route::resource('apartments', 'ApartmentController');
            Route::post('/check/{id}', 'ApartmentController@check')->name('apartments.check');
            Route::get('/floors/index/{id}', 'FloorController@index')->name('floors.index');
            Route::post('/floors/store', 'FloorController@store')->name('floors.store');
            Route::get('/floors/show/{id}', 'FloorController@show')->name('floors.show');
            Route::post('/floors/update', 'FloorController@update')->name('floors.update');
            Route::get('/floors/destroy/{id}', 'FloorController@destroy')->name('floors.destroy');


            Route::resource('facilities', 'FacilityController');

            // Route::get('/settings/cover', 'SettingController@cover')->name('setting.cover');
            // Route::post('/settings/change_cover', 'SettingController@change_cover')->name('setting.change_cover');
            Route::get('/settings/logs', 'SettingController@logs')->name('setting.logs');
            // Route::get('/settings/settings', 'SettingController@settingsText')->name('setting.settingsText');
            Route::post('/settings/setting', 'SettingController@settings')->name('setting.settings');
            Route::get('/settings/social', 'SettingController@social')->name('setting.social');

            Route::get('/settings/contact', 'SettingController@contact')->name('setting.contact');
            Route::get('/settings/export-csv', 'SettingController@exportCSV')->name('setting.export-csv');
            Route::post('/settings/markAsRead/{id}', 'SettingController@markAsRead')->name('setting.markAsRead');


            Route::get('/settings/changePassword', 'SettingController@changePassword')->name('setting.changePassword');
            Route::post('/settings/changePass', 'SettingController@changePass')->name('setting.changePass');
        }
    );
