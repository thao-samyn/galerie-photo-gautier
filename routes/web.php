<?php

use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', [Index::class, 'index'])->name('index');
Route::get('/mentions-legales', function () {
    return view('mention-legales');
})->name('mention-legale');

Route::get('/cgu', function () {
    return view('cgu');
})->name('cgu');
