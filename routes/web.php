<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//Admin Auth Routes
Route::middleware('auth:admin')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/', 'AdminController@view');
    Route::post('/', 'AdminController@store');
    Route::resource('manageAdmins', 'AdminController');
    Route::resource('manageComplaint', 'ComplaintController');
    Route::get('pendingComplaint', 'ComplaintController@pending');
    Route::resource('manageUsers', 'UsersController');
    });

//Login Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::namespace('Admin\Auth')->group(function () {
        Route::get('/login', 'LoginController@showLoginForm')->name('login');
        Route::post('/login', 'LoginController@login')->name('log-to-admin');
        Route::post('/logout', 'LoginController@logout')->name('logout');
    });
});


//Client Routes
Route::resource('/', 'HomeController')->middleware('auth');
Route::resource('/status', 'viewComplaintConttroller')->middleware('auth');

Auth::routes();
