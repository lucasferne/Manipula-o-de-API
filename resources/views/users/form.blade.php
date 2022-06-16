@extends('layouts.main')

@section('title', 'Users')

@section('content')

    <div class="container">
        <h1>Criar usuário</h1>

        <form action="{{route('users.store')}}" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Insira o nome">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Insira um Email">
            </div>
            
            <div class="row">
                <div class="form-group col">
                    <label for="exampleInputPassword1">Gender</label>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="exampleInputPassword1">Status</label>
                    <select name="status" id="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
