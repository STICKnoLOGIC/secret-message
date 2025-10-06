<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
Route::get('/r/{token}', [MessageController::class, 'show'])->name('messages.show');


//demo purpose
Route::get('/', function () {
    return view('demo.main');
});
Route::get('/demo/message', function () {
    return view('demo.main');
});
