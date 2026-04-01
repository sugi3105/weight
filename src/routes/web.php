<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightLogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WeightTargetController;

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

//Route::get('/', function () {
    //return view('welcome');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register/step1', [RegisterController::class, 'create']);
Route::post('/register/step1', [RegisterController::class, 'store']);

Route::get('/register/step2', [WeightTargetController::class, 'create']);
Route::post('/register/step2', [WeightTargetController::class, 'store']);


Route::middleware(['auth'])->group(function () {

    Route::get('/weight_logs', [WeightLogController::class, 'index']);
    Route::get('/weight_logs/create', [WeightLogController::class, 'create']);
    Route::post('/weight_logs', [WeightLogController::class, 'store']);
    Route::get('/weight_logs/search', [WeightLogController::class, 'search']);
    Route::get('/weight_logs/{weightLogId}', [WeightLogController::class, 'show']);

    Route::post('/weight_logs/{weightLogId}/update', [WeightLogController::class, 'update']);
    Route::post('/weight_logs/{weightLogId}/delete', [WeightLogController::class, 'destroy']);

    Route::get('/weight_logs/goal_setting', [WeightTargetController::class, 'edit']);
    Route::post('/weight_logs/goal_setting', [WeightTargetController::class, 'update']);

    Route::post('/logout', [LoginController::class, 'destroy']);
});