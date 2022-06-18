<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Post;
use App\models\Comment;
use App\Models\Credentials;


class CommentController extends Controller
{
    public function __construct() //construct pra evitar reescrever o token
    {
        $this->token = Credentials::where('key', 'API_TOKEN')->first()->value;
    }

    public function index($id_post) 
    {
        $comments = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/posts/' . $id_post . '/comments')->collect();
        return view('comments.view_comments', ['comments' => $comments, 'id_post' => $id_post]); //retorna todos os comentários no post
    }

    public function store(Request $request) //necessário o ID do post enviado pelo formulário
    {
        $comment = Http::withToken($this->token)->post('https://gorest.co.in/public/v2/posts/' . $request->input('id_post') . '/comments',[
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "body" => $request->input('body')
        ]);

        return redirect('/api/posts/' . $request->input('id_post') . '/comments'); //cria um novo comentário
    }

    public function destroy($id_comment) //deleta o comentário do ID selecionado
    {
        Http::withToken($this->token)->delete('https://gorest.co.in/public/v2/comments/' . $id_comment);

        return back();
    }

    public function show($id_comment) //id do comentário 
    {
        $comment = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/comments/' . $id_comment);
        return $comment; //retorna o comentário em específico
    }
}
