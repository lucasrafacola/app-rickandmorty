<?php

use App\Http\Controllers\CharactersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocationsController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'auth'])->name('auth.login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dash.index');

Route::get('/dashboard/todos_personagens/{page}', [CharactersController::class, 'all'])->name('characters.all')->whereNumber('page');

Route::get('/dashboard/todos_lugares/{page}', [LocationsController::class, 'all'])->name('locations.all')->whereNumber('page');
