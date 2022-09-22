@extends('index')
@section('title','Страница личного кабинета')
@section('content')
    <h1>Личный кабинет</h1>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$users->id}}</th>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->size}}</td>
                            <td>{{$users->color}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
