@extends('Layouts.dashboard')
@section('titulo', '- Editar Carrera')

@section('contenido')

    <div class="container">

        <h2 class="global-tittle">EDITAR CARRERA DE PREGRADO</h2>
        <h2 class="global-tittle">: {{ mb_strtoupper($carreraPregradoEdit->carrera) }}</h2>

        <br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Plan de estudio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php
                $numero = 1 
                @endphp

                <th scope="row">{{$numero}}</th>  
                @if ($carreraPregradoEdit->estadoArchivo)
                    <td>Archivo_Cargado</td>
                    <td class="d-flex">
                        <form class="formEliminarPdfCarPre" action="{{ route('eliminarPdfCarreraPregrado', $carreraPregradoEdit->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></button>
                        </form> 
                        <a href="{{ route('verPlanCarrPre', $carreraPregradoEdit->id) }}" class="btn btn-primary mx-1" target="_blank"><i class="fa-solid fa-eye"></i></a>
                    </td>
                @else
                    <td>Favor subir el plan de estudio</td>
                    <td class="d-flex">  
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalAddNuevoPlanCarPre"><i class="fa-sharp fa-solid fa-upload"></i></button>
                    </td>
                @endif
            
            </tbody>
        </table>

        <form class="formEnviarNewPlan" action="{{ route('guardarNuevosDatosCarrPre', ['id' => $carreraPregradoEdit->id, 'depto' => $carreraPregradoEdit->departamento]) }}" method="POST">
            @csrf
            
            <div class="col-md-12">
                <label for="validationCustomUser" class="form-label">Tipo de Carrera</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-bars"></i></span>
                    <input name="editarTipoCarreraPre" type="text" class="form-control" id="tipoCarreraPregrado" value="Carrera_Pregrado" readonly> <!-- La propiedad readonly permite que el input sea solo de lectura ya que disable no envia el valor del input y el objetivo es que esté deshabilitado pero que se envíe -->
                </div>
            </div>

            <br>
            <div class="col-md-12">
                <label for="validationCustomUser" class="form-label">Nombre de la carrera</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-pen-to-square"></i></span>
                    <input value="{{$carreraPregradoEdit->carrera}}" name="editarNombreCarreraPre" type="text" class="form-control" id="nombreCarreraPregrado">
                    <div class="valid-feedback">
                        Carrera invalida!
                    </div>
                </div>
            </div>
            
            
            <br>
            <div class="col-md-12">
                <label for="validationCustomCorreo" class="form-label">Codigo de la carrera</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-file-lines"></i></span>
                    <input value="{{$carreraPregradoEdit->codigoCarrera}}" name="editarCodigoCarreraPre" type="text" class="form-control" id="codigoCarreraPregrado" aria-describedby="inputGroupPrepend">
                    <div class="invalid-feedback">
                        Codigo no valido!
                    </div>
                </div>
            </div>

            <br>
            <div class="col-md-12">
                <label for="validationCustomCorreo" class="form-label">Departamento</label>
                <input value="{{$carreraPregradoEdit->departamento}}" name="editarDeptoCarreraPre" class="form-control" list="datalistOptions" id="deptoCarreraPregrado">
                <datalist id="datalistOptions">
                    <option value="INGA" label="Ingeniería y Arquitectura"></option>
                    <option value="MED" label="Medicina"></option>
                    <option value="CCHH" label="Ciencias y Humanidades"></option>
                    <option value="JCCSS" label="Jurisprudencia y Ciencias Sociales"></option>
                    <option value="CCEE" label="Ciencias Económicas"></option>
                    <option value="CCNN" label="Ciencias Naturales y Matemáticas"></option>
                    <option value="CCAA" label="Ciencias Agronómicas"></option>
                    <option value="QQFF" label="Química y Farmacia"></option>
                    <option value="EPOS" label="Posgrado"></option>
                    <option value="ECTM" label="Carreras Técnicas"></option>
                    <option value="PLCOM" label="Planes Complementarios"></option>
                </datalist>
            </div>

            <br>
            <a href="{{ route('cancelarCarrPre', ['depto' => $carreraPregradoEdit->departamento]) }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
            
        </form>

    </div>


    <!------------- Modal para subir el archivo pdf nuevamente el pdf del plan de estudio de la carrera de pregrado -->
    <div class="modal fade" id="modalAddNuevoPlanCarPre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Subir pdf del plna de estudio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('nuevoPlanCarrPregado', $carreraPregradoEdit->id) }}" enctype="multipart/form-data" method="POST" class="row g-3 needs-validation" novalidate>
                        @csrf

                        <div class="col-md-12">
                            <label for="validationCustomCorreo" class="form-label">Cargar archivo del plan de estudio</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-regular fa-file"></i></span>
                                <input name="editNewPlanCarPre" accept=".pdf" type="file" class="form-control" aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Seleccione un archivo
                                </div>
                            </div>
                        </div>
            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Subir archivo</button>
                        </div>
        
                    </form>
                </div> 

            </div>
        </div>
    </div>

@endsection

@section('jsVistasAdmin')

    <script>
        //Validacion de que los campos no estén vacios
        $('.formEnviarNewPlan').on('submit', function(e) {

            var pregradoCarNombre = $('#nombreCarreraPregrado').val().trim();
            var pregradoCarCodigo = $('#codigoCarreraPregrado').val().trim();
            var pregradoCarDepto = $('#deptoCarreraPregrado').val().trim();

            if (pregradoCarNombre === "" || pregradoCarCodigo === "" || pregradoCarDepto === "") {
                e.preventDefault(); // evita el envío del formulario si hay campos vacíos

                Swal.fire({
                    title: "Campos vacíos",
                    text: "Rellene todos los campos",
                    icon: "error"
                });
            }
        });
    </script>

    <script>

        $('.formEliminarPdfCarPre').on('submit', function(e){
            e.preventDefault();

            Swal.fire({
                title: "¿Está seguro?",
                text: "Se eliminará la el pdf",
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

    @if (Session::has('resEliminarPdfCarPre'))
        <script>
            Swal.fire({
                title: "Información",
                text: "{{ session('resEliminarPdfCarPre') }}",
                icon: "success"
            });
        </script>  
    @endif

    @if (Session::has('resSubirNewPlanCarrPre'))
        <script>
            Swal.fire({
                title: "Información",
                text: "{{ session('resSubirNewPlanCarrPre') }}",
                icon: "success"
            });
        </script>  
    @endif

    @if (Session::has('resSinArchivoCarrePre'))
        <script>
            Swal.fire({
                title: "Información",
                text: "{{ session('resSinArchivoCarrePre') }}",
                icon: "error"
            });
        </script>  
    @endif
    
@endsection