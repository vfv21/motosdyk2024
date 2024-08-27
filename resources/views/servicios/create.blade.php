@extends('layouts.app')
@section('titulo', 'Crear Servicio')
@section('cabecera', 'Crear Servicio')

@section('contenido') 
    <div class="flex justify-center">
        <div class="card w-96 shadow-2xl bg-base-100">
            <div class="card-body">
                <form action="{{route('servicios.store')}}" method="POST">
            @csrf
            {{-- Nombre --}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Nombre</span>
                </label>
                <input type="text" name="nombre" placeholder="Nombre servicio" maxlength="100" class="input input-bordered" required />
            </div>
            {{--Descripcion--}}
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Descripcion</span>
                </label>
                <input type="text" name="descripcion" placeholder="Escriba la descripción" maxlength="255" class="input input-bordered" />
             </div>
             {{--botones--}}
             <div class="form-control mt-6">
                <button type="sumit" class="btn bn-primary">Crear servicio</button>
                <a href="{{ route('servicios.index')}}" class="btn btn-outline btn-primary mt-4">Cancelar</a>
            </div>
        </form>

    </div>
</div>
@endsection