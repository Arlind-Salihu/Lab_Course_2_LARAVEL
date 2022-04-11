<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\User;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "This is Home Page";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact-page', [ContactController::class, 'index'])->name('lindi');

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function(){

    $users = User::all();
    return view('dashboard', compact('users'));
})->name('dashboard');
