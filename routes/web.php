<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MembreController;
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
    return view('home');
});

Route::get("/admin",function () {
    return view('admin.main');
});

Route::resource('/admin/membre', MembreController::class);
Route::resource('/admin/genre', GenreController::class);

