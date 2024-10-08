@extends('Layouts.dashboard')
@section('titulo', '- Anuncios Académicos')

@section('contenido')

<div class="container">
    <h2 class="global-tittle">GESTIÓN DE ANUNCIOS ACADÉMICOS</h2>
    <hr>
    <br>
    <!-- Bton para poder insertar un anuncio -->
    <div class="container">
        <a href="{{ route('vistaCrearAnuncio') }}" class="btn btn-success mx-1"><i class="fa-solid fa-plus"></i> Agregar Anuncios académicos</a>
    </div>
        @if ($anuncios->isEmpty())
            <div class="alert alert-empty text-center">
                ¡No se han registrado anuncios!
            </div>
            <br><br><br><br><br>
        @else
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Fecha_Publicacion</th>
                        <th scope="col">Fecha_Expiracion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $numero = 1 
                    @endphp
            
                    @foreach ($anuncios as $anuncio)
                    <tr>
                        <th scope="row">{{$numero}}</th>  
                        <td>{{$anuncio->titulo}}</td>
                        <td>{{ date('d-m-Y', strtotime($anuncio->fechaPublicacion)) }}</td>
                        <td>{{ date('d-m-Y', strtotime($anuncio->fechaExpiracion)) }}</td>

                        <td class="d-flex">
            
                            <form action="{{ route('eliminarAnuncio', $anuncio->id) }}" class="formEliminarAnuncio" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></button>
                            </form> 
                            
                            <a href="{{ route('vistaEditarAnuncio', $anuncio->id) }}" class="btn btn-primary mx-1">
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
        @endif
    </div>
    
@endsection

@section('jsVistasAdmin')

    <script>
        $('.formEliminarAnuncio').on('submit', function(e){
            e.preventDefault();

            Swal.fire({
                title: "¿Está seguro?",
                text: "Se eliminará el anuncio",
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

    @if (Session::has('resCrearAnuncio'))
        <script>
            Swal.fire({
                title: "Informacion",
                text: "{{ session('resCrearAnuncio') }}",
                icon: "success"
            });
        </script>  
    @endif

    @if (Session::has('resEliminarAnuncio'))
        <script>
            Swal.fire({
                title: "Informacion",
                text: "{{ session('resEliminarAnuncio') }}",
                icon: "success"
            });
        </script>  
    @endif

    @if (Session::has('resEditarAnuncio'))
        <script>
            Swal.fire({
                title: "Informacion",
                text: "{{ session('resEditarAnuncio') }}",
                icon: "success"
            });
        </script>  
    @endif
    
@endsection