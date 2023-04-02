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

// Route::group(['prefix' => 'employees'], function () {
//     Route::get('/', 'EmployeeController@index')->name('employees.index');
//     Route::get('/create', 'EmployeeController@create')->name('employees.create');
//     Route::post('/', 'EmployeeController@store')->name('employees.store');
//     Route::get('/{employee}', 'EmployeeController@show')->name('employees.show');
//     Route::get('/{employee}/edit', 'EmployeeController@edit')->name('employees.edit');
//     Route::put('/{employee}', 'EmployeeController@update')->name('employees.update');
//     Route::delete('/{employee}', 'EmployeeController@destroy')->name('employees.destroy');
// });

Route::get('/research', function () {
    return view('research');
});
Route::get('/design', function () {
    return view('design');
});
Route::get('/engineering', function () {
    return view('engineering');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('employees', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees');
Route::get('employees/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employees.create');
Route::post('employees/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
Route::get('employees/show/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employees.show');
Route::get('employees/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');
Route::delete('employees/destroy/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::put('employees/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');


Route::get('emails/newEmployee', [App\Http\Controllers\EmailsController::class, 'newEmployee'])->name('newEmployee');
