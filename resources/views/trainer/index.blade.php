@extends('layouts.app')
@section('title', 'Trainer')
@section('content')
<div class="container">
  <h2>Lista de Entrenadores</h2>
  <div class="row">
    @foreach ($trainers  as  $item)
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img src="/images/{{$item->avatar}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    @endforeach
 </div>
@endsection
