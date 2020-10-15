<?php

use Illuminate\Support\Facades\Route;

Route::name('root_path')->get('/' , 'PagesController@home');

Route::name('about_path')->get('/about', 'PagesController@about');

Route::name('contact_path')->get('/contact' , 'PagesController@contact');

