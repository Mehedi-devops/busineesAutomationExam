<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google',[GoogleController::class,'google'])->name('auth.google');
Route::get('auth/google/callback',[GoogleController::class,'googleCallback']);

Route::get('account/create',[AccountController::class,'create'])->name('account.create');
Route::post('account/store',[AccountController::class,'store'])->name('account.store');
Route::get('accounts',[AccountController::class,'list'])->name('account.list');
Route::get('account/edit/{id}',[AccountController::class,'edit'])->name('account.edit');
Route::put('account/update/{id}',[AccountController::class,'update'])->name('account.update');
// ajax call
Route::get('getbranch/{id}',[AccountController::class,'branches']);
Route::get('getDistrict/{id}',[AccountController::class,'district']);
Route::get('getThanas/{id}',[AccountController::class,'thanas']);
Route::get('getCategory/{id}',[AccountController::class,'category']);

require __DIR__.'/auth.php';
