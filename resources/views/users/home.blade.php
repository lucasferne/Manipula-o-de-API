@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">


        <div class="row">
            <div class="col">
                <h1>Todos os usuários</h1>
            </div>
            <div class="col">
                <a type="button" class="btn btn-primary" href="{{ route('form-usuario') }}">Criar usuário<a>
            </div>
        </div>

        @foreach ($users as $user)
            <div class="row">
                <a class="col" href="{{ route('users.show', [$user['id']]) }}">{{ $user['id'] }}
                    {{ $user['name'] }}</a>
                    
                <form class="col" id="delete-user" action="{{ route('users.destroy', [$user['id']]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
