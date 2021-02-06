<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Redirect::to('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
