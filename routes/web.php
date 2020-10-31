<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiosController;

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
Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'nosotros' )->name('nosotros');
Route::view('/servicios', 'Servicios')->name('servicios');
Route::view('informes', 'informes')->name('informes');
Route::get('beneficios', [BeneficiosController::class, 'index'])->name('beneficios.index');
Route::get('beneficios/crear', [BeneficiosController::class, 'create'])->name('beneficios.create');

Route::post('beneficios', [BeneficiosController::class, 'store'])->name('beneficios.store');

Route::get('beneficios/{beneficio}', [BeneficiosController::class, 'show'])->name('beneficios.show');



//Route::resource('beneficios', BeneficiosController::class);
Route::view('/login', 'login')->name('login');
Auth::routes(['register'=> false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
