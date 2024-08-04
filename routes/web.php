<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvController;




// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/cv', [CvController::class, 'index']);
// Route::get('/', [CvController::class, 'home'])->name('home');

Route::get('/', [CvController::class, 'home'])->name('home');

Route::get('/profile', [CvController::class, 'profile'])->name('profile');
Route::get('/experiences', [CvController::class, 'experience'])->name('experience');
Route::get('/education', [CvController::class, 'education'])->name('education');
Route::get('/projects', [CvController::class, 'projects'])->name('projects');
Route::get('/skills', [CvController::class, 'skills'])->name('skills');
Route::get('/languages', [CvController::class, 'languages'])->name('languages');