<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::post('/login', [PageController::class,'login']);
Route::get('dashboard', function(){
    $user = session('user');
    return view('dashboard', compact('user'));
})->name('dashboard');
Route::get('pengelolaan', function (){
    return view('pengelolaan');
}
)->name('pengelolaan');
Route::get('profile', function (){
    $user = session('user');
    return view('profile', compact('user'));
}
)->name('profile');
