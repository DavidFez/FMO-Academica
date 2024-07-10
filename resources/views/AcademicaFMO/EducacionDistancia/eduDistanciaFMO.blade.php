@extends('Layouts.index') 

@section('titulo-publico', '- Educación a Distancia FMO')

@section('css-publico')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/eduDistanciaPublic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tituloEncabezadoGlobal.css') }}">
    
@endsection

@section('contenido-publico')

    <div class="container_tablee">
        <h3 id="h">CARRERAS DE EDUCACIÓN A DISTANCIA EN FMO</h3>
    </div>


    <div class="container">
        <!-- contenedor de tarjetas de plataformas-->
        <!-- Como lo intentabamos <img src="#asset($carDistancia->rutaBanner)}}" class="card-img-top" alt="..."> -->
        <div class="row">

            @foreach ($distanciaFMO as $carDistancia)

            <div class="col-12 col-md-6 d-flex">
                
                <div class="card flex-fill border-0 illustration">
                
                    <img src="{{ asset('storage/'.$carDistancia->rutaBanner) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> {{$carDistancia->carrera}} </h5>
                    <p class="card-text">Para mayor información:</p>
                    <a href="{{ route('infoDistanciaFMO', $carDistancia->id)}}" class="btn btn-primary">Ver aquí</a>
                    </div>
                </div>
            
            </div>
            
            @endforeach
            
        </div>
    </div>

@endsection