<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{lang}', function ($lang){

if(in_array($lang,['ar','fr'])){

session(['locale'=>$lang]);

}

return back();

});

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
