<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LanguageMiddleware;

Route::middleware([LanguageMiddleware::class])->group(function () {

Route::get('/', function () {
    return view('welcome'); // ou 'home' selon votre fichier view
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::get('lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    return redirect()->back();
});

});