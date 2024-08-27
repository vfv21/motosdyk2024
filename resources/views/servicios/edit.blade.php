@extends('layouts.app')
@section('titulo', 'Editar Servicio')
@section('cabecera', 'Editar Servicio ' . $servicio->nombre)

@section('contenido')
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{route('servicios.update', $servicio->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-control">
                    <label class="label" for="nombre">
                        <span class="label-text">Nombre</span>
                    </label>
                    <input type="text" name="nombre" placeholder="Nombre servicio" class="input input-bordered" maxlength="100" value="{{$servicio->nombre}}" required />
                    </div>
                    <div class="form-control">
                        <label class="label" for="descripcion">
                            <span class="label-text">Descripción</span>
                        </label>
                        <input type="text" name="descripcion" placeholder="Escriba la descripción" class="input input-bordered" maxlength="255" value="{{$servicio->descripcion}}" />
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Actualizar Servicio</button>
                        <a href="{{ route('servicios.index') }}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection