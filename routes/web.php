<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

    // Home Route
    Route::get('/', 'HomeController@index')->name('home');

    // Role Route
    Route::resource('role','RoleController');

    // Permission Route
    Route::resource('permission', 'PermissionController');

    // User Route
    Route::resource('user', 'UserController');
    Route::put('user-status/{id}' , 'UserController@publicStatus')->name('user.status');

    // Category Route
    Route::resource('category', 'CategoryController');
    Route::post('category-add', 'CategoryController@modalStore')->name('category.modaladd');

    // Task Route
    Route::resource('/task', 'TaskController');
    Route::put('task-status/{id}', 'TaskController@publicStatus')->name('task.status');

});