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
Route::get('/view/{token}',function (Request $request){
    $message =  session('message');
    return view('messages.view',compact('message'));
})->name('messages.view');


//demo purpose
Route::get('/', function () {
    return view('demo.main');
});
Route::post('/demo', [DemoController::class, 'store'])->name('demo.store');
