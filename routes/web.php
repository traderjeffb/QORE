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
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');



Route::prefix('employees')->group(function () {
    Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employees');
    Route::get('/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employees.store');
    Route::get('/show/{id}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('employees.show');
    Route::get('/edit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employees.edit');
    Route::delete('/destroy/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employees.destroy');
    Route::put('/update/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employees.update');
});



Route::post('emails/sendEmail{employee}', [App\Http\Controllers\EmailsController::class, 'sendEmail'])->name('emails.sendEmail');

Route::get('emails/welcomeNewEmployee', [App\Http\Controllers\EmailsController::class, 'welcomeNewEmployee'])->name('emails.WelcomeNewEmployee');

//API Controller
Route::get('api/index/{symbol?}', [App\Http\Controllers\ApiController::class, 'index'])->name('api.index');
Route::get('api/apiList/{data}', [App\Http\Controllers\ApiController::class, 'apiList'])->name('api.apiList');
Route::post('api/daily', [App\Http\Controllers\ApiController::class, 'daily'])->name('api.daily');


Route::prefix('modules')->group(function () {
    Route::get('/index', [App\Http\Controllers\ModulesController::class, 'index'])->name('modules.index');
    Route::get('/create', [App\Http\Controllers\ModulesController::class, 'create'])->name('modules.create');
    Route::post('/store', [App\Http\Controllers\ModulesController::class, 'store'])->name('modules.store');
    Route::get('/show/{id}', [App\Http\Controllers\ModulesController::class, 'show'])->name('modules.show');
    Route::get('/edit/{id}', [App\Http\Controllers\ModulesController::class, 'edit'])->name('modules.edit');
    Route::delete('/destroy/{id}', [App\Http\Controllers\ModulesController::class, 'destroy'])->name('modules.destroy');
    Route::put('/update/{id}', [App\Http\Controllers\ModulesController::class, 'update'])->name('modules.update');
});
