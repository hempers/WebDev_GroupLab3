<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 

Route::get('/contactus', function () {
    return view('contactus');
})->name('contact'); 

Route::get('/about', function () {
    return view('about');
})->name('about'); 


<<<<<<< Updated upstream
    return redirect()->route('welcome');
});
=======
// Display the login form
Route::get('/login', function () {
    return view('login');
})->name('login');

// Display the signup form
Route::get('/signup', function () {
    return view('signup'); 
})->name('signup');
>>>>>>> Stashed changes
