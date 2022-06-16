<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/form', function () {
    return view('users.form');
})->name('form-usuario');
