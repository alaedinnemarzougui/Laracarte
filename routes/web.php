<?php

use Illuminate\Support\Facades\Route;

Route::view('/' , 'pages.home')->name('root_path');

Route::view('/about' , 'pages.about')->name('about_path');

Route::name('contact_path')->get('/contact' , 'PagesController@contact');

Route::name('contact_path')->post('/contact' , 'PagesController@store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
