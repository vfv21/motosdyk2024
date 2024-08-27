@extends('layouts.app')

@section('titulo', 'Nuestros Servicios')

@section('contenido')
{{-- Boton para crear un nuevo servicio--}}
<div class="flex justify-end m-4">
  <a href="{{ route('servicios.create')}}" class="btn btn-outline">Nuevo servicio</a>
</div>

<div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 m-6">
 @foreach($servicios as $servicio)
<div class="card bg-base-100 w-60 shadow-xl">
    <figure>
      <img
        src="https://picsum.photos/id/{{ $servicio->id}}/240"
        alt="{{ $servicio->nombre}}"/> 
    </figure>
    <div class="card-body">
      <h2 class="card-title">{{ $servicio->nombre}}</h2>
      <div class="badge badge-outline">${{ $servicio->precio}}</div>
      <p>{{ Str::limit($servicio->descripcion,50) }}</p>
      <div class="card-actions justify-end">
      <a href="{{route('servicios.edit', $servicio->id)}}" class="btn btn-outline btn-xs" >Editar</a>
      <form action="{{route('servicios.destroy', $servicio->id) }}" method="POST">
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-outline btn-xs">Eliminar</button>
       </form>
       </div>
    </div>
  </div>
    
@endforeach

</div>
@endsection