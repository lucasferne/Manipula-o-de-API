<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Credentials;

class Post_CommentController extends Controller
{
    public function __construct() //construct pra evitar reescrever o token
    {
        $this->token = Credentials::where('key', 'API_TOKEN')->first()->value;
    }

    public function index() //lista todos os posts existentes no banco
    {
        $posts = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/posts');
        return $posts;
    }

    public function show($id_post) //id do post 
    {
        $post = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/posts/' . $id_post);
        return $post; //retorna o post em específico
    }

   public function destroy($id_post) 
   {
        Http::withToken($this->token)->delete('https://gorest.co.in/public/v2/posts/' . $id_post); 
        return back();
        //deleta o post

   }
}
