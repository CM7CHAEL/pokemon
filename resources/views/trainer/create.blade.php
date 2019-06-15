@extends('layouts.app')
@section('title', 'Trainer')
@section('content')
<div class="container">
  <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
          <label for="">Nombre</label><input type="text" name="name" class="form-control"><br>
          <label for="">Avatar</label><input type="file" name="avatar">
          <label for="">Descrpcion</label><input type="text" name="description" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
  </form>
@endsection
