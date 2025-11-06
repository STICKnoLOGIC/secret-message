<?php

use App\Http\Controllers\DemoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::post('/m', [MessageController::class, 'store'])->name('messages.store');
Route::get('/m', function (){
    return view('messages.home');
})->name('messages.home');
Route::get('/r/{token}', [MessageController::class, 'show'])->name('messages.show');
Route::get('/view/{token}',function (){
    return view('messages.view');
})->name('messages.view');
Route::view('/nimda/nimda','messages.admin')->name('messages.admin');

// legal views
Route::view('/dmca','legal.dmca')->name('legal.dmca');
Route::view('/privacy','legal.privacy')->name('legal.privacy');
Route::view('/terms','legal.tos')->name('legal.tos');


//demo purpose
Route::get('/', function () {
    return view('demo.main');
})->name('demo.main');
Route::post('/demo', [DemoController::class, 'store'])->name('demo.store');
Route::get('/demo/{token}', function (){
     return view('demo.view');
})->name('demo.view');
