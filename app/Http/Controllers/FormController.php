<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form_post($id_user){
        return view('posts.form', ['id_user' => $id_user]);
        //passa a variável do ID do user para o formulário de criação de um novo post
    }

    public function form_comment($id_post){
        return view('comments.form', ['id_post' => $id_post]); 
        //passa a variável do ID do post para o formulário de criação de um novo comentário
    }
}
