@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Todos os usuários</h1>
        </div>
        <div class="col">
            <a type="button" class="btn btn-primary" href="{{route('form-usuario')}}">Criar usuário<a>
        </div>
    </div>

    @foreach ($users as $user)
        <a href="{{ route('users.show', [$user['id']]) }}">{{ $user['id'] }} {{ $user['name'] }}</a>
        <a type="button" class="btn btn-sm btn-danger" href="{{ route('users.show', [$user['id']]) }}">Apagar</a>
        <br>

    @endforeach

@endsection
