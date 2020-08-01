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

// This will be replaced with homepage
Route::view('/', 'index');

Route::view('/all', 'all_post');

// Auth Routes. LOGIN, REGISTER, REST PASSWORD and FORGOT PASSWORD
Auth::routes();

// View and Controller for logged in dashboard
Route::get('/dashboard', 'DashboardController@home')->name('dashboard.home'); // @eni4sure
Route::get('/new_upload', 'DashboardController@newUpload')->name('dashboard.new_upload');
Route::get('/my_uploads', 'DashboardController@myUploads')->name('dashboard.my_uploads');

// Actions
Route::post('/new/image_upload', 'DashboardController@newImageUpload')->name('add.image_upload');
Route::post('/new/text_upload', 'DashboardController@newTextUpload')->name('add.text_upload');
Route::put('/update/{id}', 'DashboardController@update')->name("dashboard.update");
Route::delete('/delete/{id}', 'DashboardController@delete')->name("dashboard.delete");
