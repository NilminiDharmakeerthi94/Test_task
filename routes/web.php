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

Route::get('/', function () {    // routes for home page
    return view('home');
});


Route::group([
    'prefix' => 'email_scheduler', 'middleware'],function(){
    Route::get('/','EmailSchedulerController@index')->name('email_scheduler.index');
    Route::get('create','EmailSchedulerController@create')->name('email_scheduler.create'); //routes for the email sheduler task
    Route::post('store','EmailSchedulerController@store')->name('email_scheduler.store');
    Route::get('out','EmailSchedulerController@checkout_form')->name('email_scheduler.out');
});

Route::group([
    'prefix' => 'email_managers', 'middleware'],function(){
    Route::get('/','EmailManagerController@index')->name('email_managers.index');      // routes for email managers tasks
    Route::get('create','EmailManagerController@create')->name('email_managers.create');
    Route::post('store','EmailManagerController@store')->name('email_managers.store');
    Route::get('out','EmailManagerController@checkout_form')->name('email_managers.out');

    Route::post('upload','EmailManagerController@upload')->name('email_managers.upload');  // route for the upload function
});

Route::get('importExportView', 'EmailManagerController@importExportView');
Route::get('export', 'EmailManagerController@export')->name('export');    // routes for the import file
Route::post('import', 'EmailManagerController@import')->name('import'); // routes for the export file