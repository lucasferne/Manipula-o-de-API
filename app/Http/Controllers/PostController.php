<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\Post;
use App\Models\Credentials;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{

    public function __construct() //construct pra evitar reescrever o token
    {
        $this->token = Credentials::where('key', 'API_TOKEN')->first()->value;
    }

    public function index($id) //id do usuário
    {
        $posts = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/users/' . $id . '/posts');
        return $posts; //retorna os posts do usuário   
    }

    public function store(Request $request, $id)
    {

        $post = Http::withToken($this->token)->post('https://gorest.co.in/public/v2/users/' . $id . '/posts',[
            "title" => $request->input('title'),
            "body" => $request->input('body')
        ]);

        return $post;
    }
}
