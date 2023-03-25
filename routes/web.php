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

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'employees'], function () {
    Route::get('/', 'EmployeeController@index')->name('employees.index');
    Route::get('/create', 'EmployeeController@create')->name('employees.create');
    Route::post('/', 'EmployeeController@store')->name('employees.store');
    Route::get('/{employee}', 'EmployeeController@show')->name('employees.show');
    Route::get('/{employee}/edit', 'EmployeeController@edit')->name('employees.edit');
    Route::put('/{employee}', 'EmployeeController@update')->name('employees.update');
    Route::delete('/{employee}', 'EmployeeController@destroy')->name('employees.destroy');
});
