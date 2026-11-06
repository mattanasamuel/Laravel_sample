<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'root'])->name('pages.root');
Route::get('about', [PagesController::class, 'about'])->name('pages.about'); //da registrare in bootstrap/app
Route::get('staff', [PagesController::class, 'staff'])->name('pages.staff'); //da registrare in bootstrap/app
Route::get('contacts', [PagesController::class, 'contacts'])->name('pages.contacts');
