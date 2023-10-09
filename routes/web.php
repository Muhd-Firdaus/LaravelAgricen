<?php

use App\Http\Controllers\BorangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/register', function () {   return view('register');    });
Route::post('/register', [UserController::class, 'store']);
Route::get('/login', [UserController::class,'index'])->name('login')->middleware('guest');
Route::get('/', [UserController::class,'index'])->name('login')->middleware('guest');
Route::post('login', [UserController::class,'authenticate']);
Route::post('/logout', [UserController::class,'logout']);

Route::group(['middleware' => ['auth', 'user']], function() {
    //user routes here
    //dasboard
    Route::get('/dashboard', function () {  return view('dashboard');   })->name('dashboard');
    Route::get('/profile', [UserController::class,'profile']);
    Route::post('/profile-update', [UserController::class,'update']);
    Route::get('/borang-AC1', function () {  return view('borangAC1');   })->name('borang-AC1');
    Route::get('/borang-AC2', function () {  return view('borangAC2');   })->name('borang-AC2');
    Route::get('/borang-AC3', function () {  return view('borangAC1');   })->name('borang-AC3');
    Route::post('/insert-AC1', [BorangController::class,'insert_AC1']);
});
