@extends('layouts.app')
@section('title', 'Editar')
@section('content')
<div class="container">
<div class="container">
  <form class="form-group" method="POST" action="/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
      <div class="form-group">
          <label for="">Nombre</label><input type="text" value="{{$trainer->name}}" name="name" class="form-control"><br>
          <label for="">Avatar</label><input type="file" name="avatar" value="{{$trainer->avatar}}">
          <label for="">Descrpcion</label><input type="text" value="{{$trainer->description}}" name="description" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
  </form>
@endsection
