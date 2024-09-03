<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('/about', function(){
    return view('about');
});

Route::get('/create/user', [UserController::class, 'showCreateNewUserForm']);
Route::post('/create/user', [UserController::class, 'storeUserData'])->name('store.user.data');
