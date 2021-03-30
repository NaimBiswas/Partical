<?php

use App\Http\Controllers\DashboradController;
use App\Http\Controllers\SkillController;
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


Route::get('/edit-shedule/{id}', [TrainingActivityController::class, 'edit'])->name('edit-shedule');

Route::post('/update-shedule/{id}', [TrainingActivityController::class, 'update'])->name('update-shedule');

Route::any('/detele-activity/{id}', [TrainingActivityController::class, 'destroy'])->name('detele-activity');



Route::get('/skill', [SkillController::class, 'index'])->name('skill');

Route::post('/add-skill', [SkillController::class, 'store'])->name('add-skill');
