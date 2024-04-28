<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmployeeRegistryController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/form', [PageController::class, 'form'])->name('form');
Route::post('/display', [PageController::class, 'display'])->name('display');
Route::get('/display-registry', [EmployeeRegistryController::class, 'fetchData'])->name('display-registry');
Route::post('/display-registry', [EmployeeRegistryController::class, 'update'])->name('updateEmployee');







