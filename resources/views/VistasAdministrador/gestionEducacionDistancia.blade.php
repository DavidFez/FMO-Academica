@extends('Layouts.dashboard')
@section('titulo', '- Carreras a Distancia')

@section('contenido')

    <div class="container">
        <h2>Gestion de Carreras a Distancia</h2>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tramite Académico</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $numero = 1 
                @endphp
        
                @foreach ($datosTramites as $tramite)
                <tr>
                    <th scope="row">{{$numero}}</th>  
                    <td>{{$tramite->tramite}}</td>

                    <td class="d-flex">
        
                        <form action="{{ route('eliminarTramite', $tramite->id) }}" class="formEliminarTramite" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></button>
                        </form> 
                        
                        <a href="{{ route('editarTramite', $tramite->id)}}" class="btn btn-primary mx-1">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        
                    </td>

                </tr>
                @php
                    $numero++
                @endphp

                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bton para poder insertar una carrera de pregrado -->
    <div class="container">
        <a href="{{ route('crearCarreraDistancia') }}" class="btn btn-success mx-1"><i class="fa-solid fa-plus"></i> Agregar Tramite Academico</a>
    </div>
    
@endsection

@section('jsVistasAdmin')

    <script>
        $('.formEliminarTramite').on('submit', function(e){
            e.preventDefault();

            Swal.fire({
                title: "¿Está seguro?",
                text: "Se eliminará el tramite",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Si, eliminar"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit()
                } 
            });

        })
    </script>

    @if (Session::has('resCrearTramite'))
        <script>
            Swal.fire({
                title: "Informacion",
                text: "{{ session('resCrearTramite') }}",
                icon: "success"
            });
        </script>  
    @endif

    @if (Session::has('resEliminarTramite'))
        <script>
            Swal.fire({
                title: "Informacion",
                text: "{{ session('resEliminarTramite') }}",
                icon: "success"
            });
        </script>  
    @endif

    @if (Session::has('resEditarTramite'))
        <script>
            Swal.fire({
                title: "Informacion",
                text: "{{ session('resEditarTramite') }}",
                icon: "success"
            });
        </script>  
    @endif
    
@endsection