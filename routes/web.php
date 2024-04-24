<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard', ['type_menu' => 'dashboard']);
});

// Route::get('login', function(){
//     return view('pages.auth.auth-login');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('home', function(){
        return view('pages.dashboard', ['type_menu' => 'menu']);
    })->name('home');

    Route::resource('users', UserController::class);
    Route::resource('companies', CompanyController::class);
});
