<?php

use App\Http\Controllers\DashboradController;
use App\Http\Controllers\TrainingActivityController;
use App\Models\TrainingActivity;
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
    return view('welcome');
});


Route::get('/dashboard', [DashboradController::class, 'index'])->name('dashboard');


Route::get('/register-activity', [TrainingActivityController::class, 'index'])->name('register-activity');

Route::post('/register-training', [TrainingActivityController::class, 'store'])->name('register-training');
