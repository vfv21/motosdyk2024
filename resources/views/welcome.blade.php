@extends('layouts,app')

@section('titulo', 'Mis servicios')

@section('contenido')
        <h1>LISTA DE SERVICIOS</h1>  
        <ul>
            @foreach ($servicios as $servicio)
                <li>{{$servicio->nombre}} - Descripcion: {{$servicio->Descripcion}}</li>

@endforeach
        </ul>  
@endsection