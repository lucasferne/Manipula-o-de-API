@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

    <div class="center">

        <h1>teste</h1>
        <a href="{{route('users.index') }}" type="button" class="btn btn-primary" class="box">Users</a> {!! "&nbsp;" !!} 
        <a type="button" class="btn btn-secondary" class="box">Posts</a> {!! "&nbsp;" !!}
        <a type="button" class="btn btn-success" class="box">Comments</a> {!! "&nbsp;" !!}

    </div>

@endsection
