<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('/about', fn()=> view('about'));

Route::get('/create/user', [UserController::class, 'showCreateNewUserForm'])->name('show_create_user');
Route::post('/create/user', [UserController::class, 'storeUserData'])->name('store.user.data');
Route::get('/show/users', [UserController::class, 'showUsers'])->name('show_users');

Route::get('/delete/{user}', [UserController::class, 'deletedUser'])->name('delete_user');
