@extends('layouts.app')
@section('title', 'Entrenador')
@section('content')
    <img style="width:200px; height:200px; background-color:#ccc; margin: 20px"
           src="/images/{{$trainer->avatar}}"
           class="card-img-top rounded-circle mx-auto d-block">
    <div class="text-center">
        <h2 class="card-title">{{$trainer->name}}</h2>
        <a href="/trainers/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
    </div>
@endsection
