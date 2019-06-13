@extends('layout')
@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
    Error en los datos obligatorios
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{route('libro.update',$libro->id)}}" role="form">
    {{csrf_field()}}
    <input name="_method" type="hidden" value="PATCH">
    <div class="form-group">
        <input type="text" name="titulo" id="titulo" class="form-control" value="{{$libro->titulo}}">
        
    </div>
    <div class="form-group">
        <input type="text" name="autor" id="autor" class="form-control" value="{{$libro->autor}}">
        
    </div>
    
    <input type="submit" value="Actualizar" class="btn btn-success">
    <a href="{{route('libro.index')}}" class="btn btn-info">Volver</a>
</form>