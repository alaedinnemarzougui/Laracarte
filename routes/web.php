<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;


Route::view('/' , 'pages.home')->name('root_path');

Route::view('/about' , 'pages.about')->name('about_path');

Route::name('contact_path')->get('/contact' , 'PagesController@contact');

Route::name('contact_path')->post('/contact' , 'PagesController@store');

Route::get('test-email' , function (){
    return new ContactMessageCreated;
});

