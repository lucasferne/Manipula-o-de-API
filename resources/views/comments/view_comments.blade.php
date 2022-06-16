@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">

        @if ($comments->isNotEmpty())
        <h3>Comentários</h3>
        @foreach ($comments as $comment)
            <div class="card">
                <h5 class="card-header">{{ $comment['email'] }}</h5>
                <div class="card-body">
                    <h3 class="card-title">{{ $comment['name'] }}</h3>
                    <p class="card-text">{{ $comment['body'] }}</p>
                    <form id="delete-comment" action="{{ route('comments.destroy', [$comment['id']]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">delete</button>
                    </form>
                </div>
            </div>            
        @endforeach
        @else
        <h3>Sem comentários</h3>
      @endif

      <a type="button" class="btn btn-primary" href="{{ route('form-comments', ['id_post' => $id_post]) }}">Criar comentário<a>
    </div>

@endsection
