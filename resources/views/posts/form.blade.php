@extends('layouts.main')

@section('title', 'Post')

@section('menus')
    <a href="javascript:history.back()">Voltar</a>
    <a href="{{ route('inicio') }}">Início</a>
@endsection

@section('content')

    <div class="container">
        <h1>Criar post</h1>

        <form action="{{ route('users.posts.store', $id_user) }}" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Titulo do post</label>
                <input type="text" class="form-control" name="title" placeholder="Insira o título">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Texto</label>
                <textarea class="form-control" name="body" placeholder="Conteúdo" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
