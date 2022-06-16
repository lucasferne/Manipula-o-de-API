@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">
      @if ($posts->isNotEmpty())
      <h2>Posts</h2>
        @foreach ($posts as $post)
        <div class="card">
            <h5 class="card-header">{{$post['title']}}</h5>
            <div class="card-body">
              <p class="card-text">{{$post['body']}}</p>
              <a href="{{route('posts.comments.index', $post['id'])}}" class="btn btn-primary">Ver comentários</a>

              <form id="delete-post" action="{{ route('posts.destroy', [$post['id']]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">delete</button>
            </form>

            </div>
          </div>
        @endforeach

      @else
      <h3>Sem posts</h3>
      @endif
    
      <a type="button" class="btn btn-primary" href="{{ route('form-posts', ['id_user' => $id_user]) }}">Criar post<a>
    </div>

@endsection
