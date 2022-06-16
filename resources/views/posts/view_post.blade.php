@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">
        {{-- fazer um if pra checar se o post é nulo --}}
        @foreach ($posts as $post)
        <div class="card">
            <h5 class="card-header">{{$post['title']}}</h5>
            <div class="card-body">
              <p class="card-text">{{$post['body']}}</p>
              <a href="{{route('posts.comments.index', $post['id'])}}" class="btn btn-primary">Ver comentários</a>
            </div>
          </div>
        @endforeach
    </div>

@endsection
