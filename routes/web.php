<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebsiteController::class,'home'])
->name('home');


Route::get('/about', [WebsiteController::class,'about'])
->name('about');


Route::get('/services', [WebsiteController::class,'services'])
->name('services');


Route::get('/certificates', [WebsiteController::class,'certificates'])
->name('certificates');


Route::get('/contact', [WebsiteController::class,'contact'])
->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth'])
->name('dashboard');



require __DIR__.'/auth.php';
