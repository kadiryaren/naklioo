<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //Auth::logout();
    return redirect()->route('home.index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/companies', function () {
    return view('companies');
});
Auth::routes();

Route::get('/home', function(){
    return redirect('');
})->name('home');

Route::post('/home/filter',[App\Http\Controllers\HomeController::class,'filter'])->name('home.filter');
Route::resource('home',App\Http\Controllers\HomeController::class);

Route::resource('ilan',App\Http\Controllers\IlanController::class);

Route::resource('profile',App\Http\Controllers\ProfileController::class);

