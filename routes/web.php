<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\ImageController;
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

Route::get('/',[AllController::class, 'index'])->name('home');
Route::get('/admin',[ImageController::class,'image'])->name('admin');
Route::get('/admin/create/image',[ImageController::class,'create'])->name('admin.image.create');
Route::post('/admin/store/image',[ImageController::class,'store'])->name('admin.image.store');