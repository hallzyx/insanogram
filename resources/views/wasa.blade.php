@extends('layouts.app')

@section('titulo')
    Perfil: {{$userInsano->name}}
@endsection

@section('contenido')
    <h1 class="text-center py-3 ">Este es el perfil de: {{$userInsano->name}}</h1>
@endsection