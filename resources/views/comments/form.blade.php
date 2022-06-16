@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">
        <h1>Criar comentário</h1>
        {{$id_post}} {{-- ERRO AQUI RESOLVER DEPOIS --}}
        <form action="{{route('comments.store', ['id_post', $id_post])}}" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o título">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" name="email" placeholder="Insira o título">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Texto</label>
                <textarea class="form-control" name="body" placeholder="Conteúdo" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
