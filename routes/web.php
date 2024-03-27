<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HotelesController;
use App\Http\Controllers\RestaurantesController;
use App\Http\Controllers\SitiosController;
use App\Http\Controllers\Question1Controller;
use App\Http\Controllers\Question2Controller;
use App\Http\Controllers\Question3Controller;
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
    return view('login.login');
});

// Ruta Login
Route::get('/login', [LoginController::class, 'login'])->name('login.login');

//Ruta Inicio
Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');

//Ruta registro
Route::get('/register', [RegisterController::class, 'register'])->name('login.register');

//Ruta Hoteles
Route::get('/hoteles', [HotelesController::class, 'hoteles'])->name('hoteles');

//Ruta restaurantes
Route::get('/restaurantes', [RestaurantesController::class, 'restaurantes'])->name('restaurantes');

//Ruta sitios
Route::get('/sitios', [SitiosController::class, 'sitios'])->name('sitios');

//Rutas preguntas
Route::get('/question1', [Question1Controller::class, 'question1'])->name('question1');
Route::get('/question2', [Question2Controller::class, 'question2'])->name('question2');
Route::get('/question3', [Question3Controller::class, 'question3'])->name('question3');

