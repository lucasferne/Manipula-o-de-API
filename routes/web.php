<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('inicio');

//Rota para formulário do usuário, que não precisa de parâmetros para sua criação
Route::get('users/form', function () {
    return view('users.form');
})->name('form-usuario');

//Rotas para formulários de post e comment (passa o parâmetro necessário para a criação dos mesmos)
Route::get('posts/form/{id_user}', [App\Http\Controllers\FormController::class, 'form_post' ])->name('form-posts'); 
Route::get('comments/form/{id_post}', [App\Http\Controllers\FormController::class, 'form_comment' ])->name('form-comments');
