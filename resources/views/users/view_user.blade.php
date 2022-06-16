@extends('layouts.main')

@section('title', 'user')

@section('content')

    <h1>{{ $user['id'] }} {{ $user['name'] }}</h1>

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
