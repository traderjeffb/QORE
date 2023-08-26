<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;

use App\Models\ResearchProject;

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


Route::get('/researchHome', function () {
    return view('researchHome');
});
Route::get('/sales', function () {
    return view('sales');
});
Route::get('/engineering', function () {
    return view('engineering');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/hedging', function () {
    return view('hedging');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/operations', function () {
    return view('operations');
});

// Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');

Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


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

Route::post('/save-data', [App\Http\Controllers\DataController::class, 'saveData'])->name('save-data');
Route::get('/getDates', [App\Http\Controllers\DataController::class, 'getDates'])->name('getDates');

//Routes for Research page
Route::get('/totals', [App\Http\Controllers\ModulesController::class, 'totals'])->name('modules.totals');

//--------------- Research
Route::prefix('research')->group(function () {
    Route::post('store', [App\Http\Controllers\ResearchController::class, 'store'])->name('research.store');
    Route::get('/index', [App\Http\Controllers\ResearchController::class, 'index'])->name('index');
    Route::get('create', [App\Http\Controllers\ResearchController::class, 'create'])->name('create');
    Route::get('/indexPast', [App\Http\Controllers\ResearchController::class, 'indexPast'])->name('research.indexPast');
    Route::get('/indexCurrent', [App\Http\Controllers\ResearchController::class, 'indexCurrent'])->name('research.indexCurrent');
    Route::get('/researchPaper/{id}', [App\Http\Controllers\ResearchController::class, 'researchPaper'])->name('researchPaper');
});

    Route::prefix('customer')->group(function () {
        Route::get('/index', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
        Route::get('/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
        Route::post('/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
        Route::get('/show/{id}', [App\Http\Controllers\CustomerController::class, 'show'])->name('customer.show');
        Route::get('/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
        Route::delete('/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
        Route::put('/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
    });

    Route::prefix('projects')->group(function () {
        Route::get('/index', [App\Http\Controllers\ProjectsController::class, 'index'])->name('projects.index');
        Route::get('/create', [App\Http\Controllers\ProjectsController::class, 'create'])->name('projects.create');
        Route::post('/store', [App\Http\Controllers\ProjectsController::class, 'store'])->name('projects.store');
        Route::get('/show/{id}', [App\Http\Controllers\ProjectsController::class, 'show'])->name('projects.show');
        Route::get('/edit/{id}', [App\Http\Controllers\ProjectsController::class, 'edit'])->name('projects.edit');
        Route::delete('/destroy/{id}', [App\Http\Controllers\ProjectsController::class, 'destroy'])->name('projects.destroy');
        Route::put('/update/{id}', [App\Http\Controllers\ProjectsController::class, 'update'])->name('projects.update');

        Route::get('/create-step-one', [App\Http\Controllers\ProjectsController::class, 'createStepOne'])->name('projects.create-step-one');
        Route::post('/create-step-one', [App\Http\Controllers\ProjectsController::class, 'postCreateStepOne'])->name('projects.create-step-one.post');

        Route::get('/create-step-two', [App\Http\Controllers\ProjectsController::class, 'createStepTwo'])->name('projects.create-step-two');
        Route::post('/create-step-two', [App\Http\Controllers\ProjectsController::class, 'postCreateStepTwo'])->name('projects.create-step-two.post');
        Route::get('/create-step-three', [App\Http\Controllers\ProjectsController::class, 'createStepThree'])->name('projects.create-step-three');
        Route::post('/create-step-three', [App\Http\Controllers\ProjectsController::class, 'postCreateStepThree'])->name('projects.create-step-three.post');

    });

    Route::prefix('sales')->group(function () {
        Route::get('/project', [App\Http\Controllers\SalesController::class, 'project'])->name('project');
        Route::post('/storeSale', [App\Http\Controllers\SalesController::class, 'storeSale'])->name('storeSale');
        Route::get('/index', [App\Http\Controllers\SalesController::class, 'index'])->name('sales.index');

    });




