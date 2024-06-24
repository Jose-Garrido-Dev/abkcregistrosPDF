@extends('Games.form')
@section('formName')
<h3 class="text-center text-dark">Editar  Registro</h3> <b>{{$game->name}}</b>
@endsection
@section('action')
    action= "{{route('games.update',$game)}}"
@endsection
@section('method')@method('PUT') @endsection