<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\formController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\foodController;
use App\Http\Controllers\updateFoodController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\phoneController;
use App\Http\Controllers\departmentController;
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
    return view('welcome');
})->name('home');

// FOOD Route
Route::get('/food',[foodController::class,'foodList'])->name('food');
Route::post('/food_order',[foodController::class,'addOrder']);
Route::get('/food_order',[foodController::class,'createForm']);
Route::get('/updatefood/createForm/{id}/{name}/{price}',[updateFoodController::class,'createForm'])->name('createForm');
Route::get('/updatefood/delete/{id}',[updateFoodController::class,'deleteFood']);
Route::post('/updatefood',[updateFoodController::class,'updateFood']);

// MEMBER, PHONE Route
Route::get("/addmember/{name}/{email}",[memberController::class,'addMember']);
Route::get("/showmember",[memberController::class,'index']);
Route::get("/showphone",[phoneController::class,'index']);
Route::get("/addphone/{uid}/{model}",[phoneController::class,'addphone']);
Route::get("showresult",[memberController::class,'showreSult']);
Route::get('departments',[departmentController::class,'index']);
Route::get('departments/{id}',[departmentController::class,'deleteDepartment']);

// MEMBER, PHONE MODEL

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::get('/information', [infoController::class, 'index'])->name('info');
    Route::get('/about', [aboutController::class, 'index'])->name('about');
    Route::get('/form', [formController::class, 'index'])->name('form');
});
