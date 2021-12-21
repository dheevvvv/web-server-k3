<?php


use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccidentController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\B3Controller;
use App\Http\Controllers\ProfileController;

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
    return redirect('/login');
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('dashboard/accident', [AccidentController::class, 'index'])->middleware('auth');
Route::get('dashboard/accident/{id}', [AccidentController::class, 'show'])->name('accident.show')->middleware('auth');

Route::get('dashboard/disease', [DiseaseController::class, 'index'])->middleware('auth');
Route::get('dashboard/disease/{id}', [DiseaseController::class, 'show'])->name('disease.show')->middleware('auth');

Route::get('dashboard/b3', [B3Controller::class, 'index'])->middleware('auth');
Route::get('dashboard/b3/{id}', [B3Controller::class, 'show'])->name('b3.show')->middleware('auth');

Route::get('dashboard/editprofile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('dashboard/edit', [ProfileController::class, 'update'])->name('profile.edit')->middleware('auth');