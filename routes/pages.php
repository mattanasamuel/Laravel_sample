<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('about', [PagesController::class, 'about'])->name('pages.about'); //da registrare in bootstrap/app
Route::get('staff', [PagesController::class, 'staff'])->name('pages.staff'); //da registrare in bootstrap/app
