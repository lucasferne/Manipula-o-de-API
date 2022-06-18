@extends('layouts.main')

@section('title', 'Comments')

@section('menus')

    <a href="javascript:history.back()">Voltar</a>
    <a href="{{ route('users.index') }}">Início</a>

@endsection

@section('content')

    <div class="container">

        @if ($comments->isNotEmpty())
            <h3>Comentários</h3>
            @foreach ($comments as $comment)
                <div class="card">
                    <h5 class="card-header">{{ $comment['email'] }}</h5>
                    <div class="card-body">
                        <h3 class="card-title">{{ $comment['name'] }}</h3>
                        <hr>
                        <p class="card-text">{{ $comment['body'] }}</p>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <form class="col" id="delete-comment"
                                action="{{ route('comments.destroy', [$comment['id']]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            @endforeach
        @else
            <h3>Sem comentários</h3>
        @endif

        <a type="button" class="btn btn-success" href="{{ route('form-comments', ['id_post' => $id_post]) }}">Criar
            comentário<a>
    </div>

@endsection
