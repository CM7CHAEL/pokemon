@extends('layouts.app')
@section('title', 'Trainer')
@section('content')
<div class="container">
  <div class="row">
    @foreach ($trainers  as  $item)
      <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top:70px">
          <img style="width:100px; height:100px; background-color:#ccc; margin: 20px"
           src="/images/{{$item->avatar}}"
           class="card-img-top rounded-circle mx-auto d-block"
           alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>
            <p class="card-text">{{$item->description}}</p>
            <a href="/trainers/{{$item->slug}}" class="btn btn-primary">Ver mas</a>
          </div>
        </div>
      </div>
    @endforeach
 </div>
@endsection
