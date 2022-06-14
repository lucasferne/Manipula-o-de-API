<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\User;
use App\Models\Credentials;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function __construct()
    {
        $this->token = Credentials::where('key', 'API_TOKEN')->first()->value;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://gorest.co.in/public/v2/users');

        return $response; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::withToken($this->token)->post('https://gorest.co.in/public/v2/users',[
            "name" => $request->input('name'),
            "gender" => $request->input('gender'),
            "email" => $request->input('email'),
            "status" => $request->input('status')
        ]);

        return $response;
    }

    public function show($id)
    {
        $response = Http::get('https://gorest.co.in/public/v2/users/' . $id);
        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        return $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $user->delete();
    }
}
