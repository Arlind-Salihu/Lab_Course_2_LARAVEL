<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;

//TESTIM
use App\Http\Controllers\Backend\ExamController;


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


//User Management All Routes -> ADMIN ROLE
Route::prefix('users')->group(function(){
    Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
    Route::get('/add', [UserController::class, 'UserAdd'])->name('user.add');
    Route::post('/store', [UserController::class, 'UserStore'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('user.edit');
    Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('user.update');
    Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('user.delete');

    //edhe qikjo route osht e lidht me qato posht
    Route::get('/exam/view', [ExamController::class, 'ExamView'])->name('exam.view');
});


//User Profile and Password
Route::prefix('profile')->group(function(){
    Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
});


//mos shko as mos puno ma posht


















//Exam Management All Routes (e kom kriju vet si testim per dy rolet)
Route::prefix('exams')->group(function(){
    Route::get('/view', [ExamController::class, 'ExamViewAdm'])->name('exam.admin.view');
    Route::get('/add', [ExamController::class, 'ExamAdd'])->name('exam.admin.add');
    Route::post('/store', [ExamController::class, 'ExamStore'])->name('exam.store');
    Route::get('/edit/{id}', [ExamController::class, 'ExamEdit'])->name('exam.edit');
    Route::post('/update/{id}', [ExamController::class, 'ExamUpdate'])->name('exam.update');
    Route::get('/delete/{id}', [ExamController::class, 'ExamDelete'])->name('exam.delete');
});