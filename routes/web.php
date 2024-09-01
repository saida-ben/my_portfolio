<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LanguageMiddleware;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/test-contact', function () {
    $testMessage = 'Je voulais vous dire que votre site est magnifique !';
    Mail::to('benzariyasaida@gmail.com')
        ->send(new Contact($testMessage));

    return 'Test email sent!';
});


});