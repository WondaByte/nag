<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ClientController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

//--Route for Admin CONTROLLER
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/nextpage', [AdminController::class, 'nextpage'])->name('nextpage');

Route::get('/viewdata', [AdminController::class, 'viewdata'])->name('viewdata');

Route::get('/addgeo', [AdminController::class, 'addgeo'])->name('addgeo');

//--Route for FieldRepCONTROLLER
Route::get('/fieldrep', [FieldController::class, 'index'])->name('index');

Route::post('/editgeodata/{id}', [AdminController::class,'editgeodata'])->name('editgeodata');
Route::get('/updateGeodata/{id}', [AdminController::class,'updateGeodata']);

// Route::get('/addGeodata', [FieldControllerController::class,'addGeodata']);
Route::post('upload', [AdminController::class,'upload']);

// Route::post('/editgeodata/{id}', [AdminController::class,'editgeodata']);
// Route::get('/editgeodata/{id}', [AdminController::class,'editgeodata']);

// Route::get('/client', [ClientController::class, 'index'])->name('index');

Route::get('deleteGeodata/{id}', [AdminController::class,'deleteGeodata']);
Route::get('/specific', [AdminController::class, 'specific'])->name('specific');

// Route::get('/add_doctor_view', [AdminController::class,'addview']);


Route::get('/cdashboard', [AdminController::class, 'cdashboard'])->name('cdashboard');


// Route::get('/dashboard', [AdminController::class,'dashboard']);


// Route::post('appointment', [HomeController::class,'appointment']);

 
Route::get('myappointment', [HomeController::class,'myappointment']);


Route::get('cancel_appoint/{id}', [HomeController::class,'cancel_appoint']);

 
 //Route::get('showappointment', [AdminController::class,'showappointment']);


 Route::get('approved/{id}', [AdminController::class,'approved']);

Route::get('cancelled/{id}', [AdminController::class,'cancelled']);
// Route::get('showdoctor', [AdminController::class,'showdoctor']);

// Route::get('deletedoctor/{id}', [AdminController::class,'deletedoctor']);







// Route::get('/nextpage', [AdminController::class,'nextpage']);
// Route::get('/dashboard', [AdminController::class,'index']);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
