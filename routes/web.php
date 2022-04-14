<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainUserController;


Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix'=>'admin','middleware'=>['admin:admin']],function(){
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});

//for Admin
Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function(){
    return view('admin.index');
})->name('dashboard');

//for User
Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function(){
    return view('user.index');
})->name('dashboard');


Route::get('/user/logout', [MainUserController::class, 'Logout'])->name('user.logout');

Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');