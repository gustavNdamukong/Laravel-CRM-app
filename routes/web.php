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

Auth::routes();

//disable registration
Auth::routes(['register' => false]);

Route::resource('home', 'HomeController');
Route::resource('employees', 'EmployeesController', ['except' => ['show']]);
Route::resource('companies', 'CompaniesController', ['except' => ['show']]);

Route::resource('/', 'HomeController');

