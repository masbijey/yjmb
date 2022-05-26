<?php

use Illuminate\Support\Facades\Route;

// Auth::routes(); //without register
Auth::routes(['register' => false]); //with register

Route::get('/add', function () {return view('add');})->middleware('auth');
Route::post('/store', [App\Http\Controllers\SignageController::class, 'store'])->name('store')->middleware('auth');
Route::get('/', [App\Http\Controllers\SignageController::class, 'index'])->name('list')->middleware('auth');
// Route::get('/add', function () {return view('add');});
// Route::post('/store', [App\Http\Controllers\SignageController::class, 'store'])->name('store');
// Route::get('/', [App\Http\Controllers\SignageController::class, 'index'])->name('list');


Route::get('/pu', [App\Http\Controllers\SignageController::class, 'power'])->name('power');
Route::get('/gu', [App\Http\Controllers\SignageController::class, 'gear'])->name('gear');
Route::get('/lu', [App\Http\Controllers\SignageController::class, 'light'])->name('light');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');