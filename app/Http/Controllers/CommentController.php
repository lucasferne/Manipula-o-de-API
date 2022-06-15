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

    public function index($id_post) //id do post
    {
        $comments = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/posts/' . $id_post . '/comments');
        return $comments; //retorna os comentários do post
    }

    public function store(Request $request, $id_post)
    {

        $comment = Http::withToken($this->token)->post('https://gorest.co.in/public/v2/posts/' . $id_post . '/comments',[
            "post_id" => $id_post,
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "body" => $request->input('body')
        ]);

        return $comment;
    }
}
