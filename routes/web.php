<?php

use App\Models\User;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserDetails;
use Illuminate\Support\Facades\Route;

Route::resource('users', 'App\Http\Controllers\UsersController');
Route::get('/', static fn () => view('welcome'));
Route::get('users/{user}/details', UserDetails::class)->name('user.details');



Route::get('/info', function () {
    phpinfo();
    exit();
});
