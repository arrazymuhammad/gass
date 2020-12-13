<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriPraktisiController;
use App\Http\Controllers\KonsultasiController;
use Illuminate\Support\Facades\Route;


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('sign-up', [AuthController::class, 'signUp'])->name('signup');
Route::post('sign-up', [AuthController::class, 'signUpProcess']);
Route::get('/', function () {
    return redirect('newsfeed');
});

Route::middleware('auth')->group(function(){
	Route::get('newsfeed', [DashboardController::class, 'newsfeed']);
	Route::post('new-post', [DashboardController::class, 'newPost']);
	Route::post('comment/{post}', [DashboardController::class, 'comment']);
		
	Route::resource("kategori-praktisi", KategoriPraktisiController::class);

	Route::prefix('konsultasi')->group(function(){
		Route::get('/', [KonsultasiController::class, 'index']);
		Route::get('chat/', [KonsultasiController::class, 'chatAll']);
		Route::get('{kategori}', [KonsultasiController::class, 'kategori']);
		Route::get('chat/{id}', [KonsultasiController::class, 'chat']);
		Route::post('chat', [KonsultasiController::class, 'chatProcess']);
	});
});
