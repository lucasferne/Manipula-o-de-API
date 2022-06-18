@extends('layouts.main')

@section('title', 'Post')

@section('menus')

    <a href="javascript:history.back()">Voltar</a>
    <a href="{{ route('users.index') }}">Início</a>

@endsection

@section('content')

    <div class="container">
        @if ($posts->isNotEmpty())
            <h2>Posts</h2>
            @foreach ($posts as $post)
                <div class="card">
                    <h5 class="card-header">{{ $post['title'] }}</h5>
                    <div class="card-body">
                        <p>{{ $post['body'] }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <a href="{{ route('posts.comments.index', $post['id']) }}" class="btn btn-primary col">Ver
                                comentários</a>
                            <form class="col" id="delete-post" action="{{ route('posts.destroy', [$post['id']]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3>Sem posts</h3>
        @endif

        <a type="button" class="btn btn-success" href="{{ route('form-posts', ['id_user' => $id_user]) }}">Criar post<a>
    </div>

@endsection
