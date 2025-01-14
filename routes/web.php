<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Pages
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class,'contact'])->name('home.contact');
Route::get('/procurement', [HomeController::class,'procurement'])->name('home.procurement');
Route::get('/worldwidepresence', [HomeController::class,'worldwidepresence'])->name('home.worldwide-presence');
Route::get('/about', [HomeController::class,'about'])->name('home.about');

