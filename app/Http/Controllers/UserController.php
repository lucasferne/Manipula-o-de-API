<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\User;
use App\Models\Credentials;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function __construct() //construct pra evitar reescrever o token
    {
        $this->token = Credentials::where('key', 'API_TOKEN')->first()->value;
    }

    public function index()
    {
        $users = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/users')->collect();

        return view('users.home', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $dados = Http::withToken($this->token)->post('https://gorest.co.in/public/v2/users',[
            "name" => $request->input('name'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "status" => $request->input('status'),
        ]);

        return redirect('/api/users');
    }

    public function show($id) //retorna um usuário específico
    {
        $user = Http::withToken($this->token)->get('https://gorest.co.in/public/v2/users/' . $id)->collect();

        return view('users.view_user', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        return Http::withToken($this->token)->put('https://gorest.co.in/public/v2/users/' . $id, [
            "name" => $request->input('name'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "status" => $request->input('status')
        ]);
    }

    public function destroy($id)
    {
        Http::withToken($this->token)->delete('https://gorest.co.in/public/v2/users/' . $id);

        return redirect('/api/users');
    }
}