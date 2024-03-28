<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RateLimitMiddleware;

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



Route::middleware('auth')->middleware('rate.limit')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::post('logout',[App\Http\Controllers\ApiController::class,'logout'])->name('logout');
