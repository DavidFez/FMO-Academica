@extends('Layouts.index') 

@section('titulo-publico', ' - Diplomados')

@section('css-publico')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssPublic/PlanesStyle/diplomados.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tituloEncabezadoGlobal.css') }}">
@endsection

@section('contenido-publico')
<div class="container_tablee">
    <h3 id="h">DIPLOMADOS</h3>
</div>
<div class="container_table">
    <div class="container">          
        <div class="row">
            @foreach ($diplomadosPlanes as $diplomado)
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card custom-card">
                        <div class="card-body">
                            <div class="title-container">
                                <h5 class="card-title">{{$diplomado->carrera}}</h5>
                            </div>
                            <hr>
                            <a href="{{ route('verInfoDiplomado', $diplomado->id) }}" class="btn btn-ver">Más detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach 
        </div>
    </div>
</div>
        
@endsection




