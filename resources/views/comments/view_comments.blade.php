@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">
        {{-- fazer um if pra checar se o comment é nulo --}}
        @foreach ($comments as $comment)
            <div class="card">
                <h5 class="card-header">{{ $comment['email'] }}</h5>
                <div class="card-body">
                    <h3 class="card-title">{{ $comment['name'] }}</h3>
                    <p class="card-text">{{ $comment['body'] }}</p>
                </div>
            </div>
            <br>
        @endforeach
    </div>

@endsection
