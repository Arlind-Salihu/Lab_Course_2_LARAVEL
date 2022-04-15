<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\Backend\UserController;


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


//User Management All Routes
Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
});