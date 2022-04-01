<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CarsController;

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
    return view('auth.login');
});

/*Inicio do sistema de login/registo*/
Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/registration', [CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
/*Route::get('/dashboard', [CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');*/
Route::get('/logout',[CustomAuthController::class,'logout']);
/*Fim do sistema de login/registo*/

Route::get('/dashboard', [CarsController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/cars-new', [CarsController::class,'create']);
Route::post('/cars-store', [CarsController::class,'store'])->name('cars-store');
Route::get('/cars-edit/{id}', [CarsController::class,'edit']);
Route::put('/cars-update/{id}', [CarsController::class,'update']);
Route::get('/cars-delete/{id}', [CarsController::class,'destroy']);

 








