<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/form', function () {
    return view('users.form');
})->name('form-usuario');

Route::get('posts/form/{id_user}', [App\Http\Controllers\FormController::class, 'form_post' ])->name('form-posts');
Route::get('comments/form/{id_post}', [App\Http\Controllers\FormController::class, 'form_comment' ])->name('form-comments');
