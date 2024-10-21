<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelTestController;

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
    return view('welcome');
});

Route::get('/classification', [ModelTestController::class, 'index'])->name('classification');
Route::get('/history', [ModelTestController::class, 'history'])->name('history');
Route::get('/about/model', [ModelTestController::class, 'about_model'])->name('about_model');
Route::get('/history/admin', [ModelTestController::class, 'history_admin'])->name('history_admin');
Route::get('/history/admin/delete/{id}', [ModelTestController::class, 'history_delete'])->name('history_delete');
Route::post('/classification/predict', [ModelTestController::class, 'makePrediction'])->name('make-prediction');
