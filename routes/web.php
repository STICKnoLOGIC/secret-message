<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::get('/m/{token}', [MessageController::class, 'show'])->name('messages.show');

Route::get('/', function () {
    return view('main');
});
