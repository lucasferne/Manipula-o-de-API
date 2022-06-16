@extends('layouts.main')

@section('title', 'user')

@section('content')

    <div class="row">
        <h1 class="col">{{ $user['id'] }} {{ $user['name'] }}</h1>
        <a class="col" type="btn" href="">Editar</a>
    </div>

    </div>
    <div class="row">
        <div class="col-md-8">
            <h3>{{ $user['email'] }}</h3>
        </div>
        <div class="col">
            <h3>{{ $user['gender'] }}</h3>
        </div>
        <div class="col">
            <h3>{{ $user['status'] }}</h3>
        </div>
    </div>

    <a type="button" class="btn btn-success" href="{{ route('users.posts.index', [$user['id']]) }}">Posts de
        {{ $user['name'] }}</a>

@endsection
