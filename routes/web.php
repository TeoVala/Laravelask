<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MyaccountController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LoginController::class, 'index']);
Route::post('/',[LoginController::class, 'store']);

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store']);

Route::post('/logout',[LogoutController::class, 'store'])->name('logout');

Route::get('/', function () {
    if(auth()->user()) {
        return redirect('/myaccount');
    }

    return view('index');
});

Route::get('/myaccount',[MyaccountController::class, 'index'])->name('myaccount');
