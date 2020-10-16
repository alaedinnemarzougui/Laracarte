<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactMessageCreated;

Route::name('root_path')->get('/' , 'PagesController@home');

Route::name('about_path')->get('/about', 'PagesController@about');

Route::name('contact_path')->get('/contact' , 'PagesController@contact');

Route::name('contact_path')->post('/contact' , 'PagesController@store');

Route::get('test-email' , function (){
    return new ContactMessageCreated;
});

