@extends('layouts.main')

@section('title', 'User')

@section('menus')
    <a href="{{ route('users.index') }}">Voltar</a>
@endsection

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1><span class="badge bg-dark">{{ $user['id'] }}</span> {{ $user['name'] }} </h1>
                <hr>
                <span><h6> {{ $user['gender'] }} - user {{ $user['status'] }} </h6></span> 
            </div>
            <span class="badge bg-dark"> <h6>{{ $user['email'] }}</h6></span>
          
                <a class="nomes btn btn-success" type="button" href="{{ route('users.posts.index', [$user['id']]) }}"> Posts </a>
            
            
        </div>
    </div>


@endsection
