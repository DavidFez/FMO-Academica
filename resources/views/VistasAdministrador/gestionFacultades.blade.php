@extends('Layouts.dashboard')
@section('titulo', '- Facultades') 
@section('contenido')
  <div class="container">
    <h2>FACULTADES</h2>

    <a href="{{ route('volverAContactosFacultad') }}" class="btn btn-secondary mx-1"><i class="fa-solid fa-circle-arrow-left"></i> Volver a contactos</a>
    <br>
    <br>

    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Facultad</th>
          <th scope="col">Oficina</th>
          <th scope="col">Correo Institucional</th>
          <th scope="col">Contacto</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @php
          $numero = 1 
        @endphp

        @foreach ($facultad as $facultadC)
          <tr>
            <th scope="row">{{$numero}}</th>  
            <td>{{$facultadC->facultad}}</td>
            <td>{{$facultadC->oficina}}</td>
            <td>{{$facultadC->correo}}</td>
            <td>{{$facultadC->contacto}}</td>
            <td class="d-flex">

              <form action="{{ route('eliminarFacultad', $facultadC->id) }}" class="formEliminarFacultad" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mx-1"><i class="fa-solid fa-trash"></i></button>
              </form> 

              <button type="button" class="btn btn-primary mx-1 btnAbrirModalEditarContacto" data-bs-toggle="modal" data-bs-target="#modalEditarFacultad{{$facultadC->id}}"><i class="fa-solid fa-pen-to-square"></i></button>
            </td>
          </tr>
          @php
            $numero++
          @endphp
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="container">
    <button type="submit" class="btn btn-success mx-1" data-bs-toggle="modal" data-bs-target="#ModalCrearFacultades"><i class="fa-solid fa-user-plus"></i> Agregar Facultad</button>
  </div>


  <!-- Modal Para ingresar una nueva facultad-->
  <div class="modal fade" id="ModalCrearFacultades" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Facultades UES</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form id="formEnviarContacto" action="{{ route('insertarContactoFacultad') }}" method="POST" class="row g-3 needs-validation" novalidate>
            @csrf

            <div class="col-md-12">
              <label for="validationCustomUser" class="form-label">Facultad</label>
              <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-bars"></i></span>
                  <input name="facultadOrigen" type="text" class="form-control" id="validaUser" value="{{$facultadPertenece}}" readonly> <!-- La propiedad readonly permite que el input sea solo de lectura ya que disable no envia el valor del input y el objetivo es que esté deshabilitado pero que se envíe -->
              </div>
          </div>

            <div class="col-md-12">
              <label for="validationCustomUser" class="form-label">Oficina</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-university"></i></span>
                <input name="nombreOficina" type="text" class="form-control" id="validaFacultad" required>
                <div class="valid-feedback">
                  Nombre invalido!
                </div>
              </div>
            </div>
                        
            <div class="col-md-12">
              <label for="validationCustomCorreo" class="form-label">Correo Electrónico</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-at"></i></span>
                <input name="correoOficina" type="text" class="form-control" id="validaCorreoFac" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Correo no valido!
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <label for="validationCustomCorreo" class="form-label">Contacto</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-address-book"></i></span>
                <input name="contactoOficina" type="text" class="form-control" id="validaContactoFac" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                  Correo no valido!
                </div>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCancelFacultad">Cancelar</button>
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btnCrearFacultad">Registrar Facultad</button>
            </div>

          </form>

        </div>       
      </div>
    </div>
  </div>

  @foreach ($facultad as $facultadId)

    <div role="" class="modal fade" id="modalEditarFacultad{{$facultadId->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Facultad</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <form action="{{ route('editarFacultad', $facultadId->id) }}" id="formEditarContacto" method="POST" class="row g-3 needs-validation" novalidate>
              @csrf

              <div class="col-md-12">
                <label for="validationCustomUser" class="form-label">Oficina</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-building-circle-check"></i></span>
                  <input value="{{$facultadId->oficina}}" name="editarNombreFacultad" type="text" class="form-control" id="txtEditarNombreContacto" required>
                  <div class="valid-feedback">
                    Nombre invalido!
                  </div>
                </div>
              </div>
                          
              <div class="col-md-12">
                <label for="validationCustomCorreo" class="form-label">Correo Electrónico</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-at"></i></span>
                  <input value="{{$facultadId->correo}}" name="editarCorreoFacultad" type="text" class="form-control" id="txtEditarCorreoContacto" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Correo no valido!
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <label for="validationCustomCorreo" class="form-label">Contacto</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend"><i class="fa-solid fa-address-book"></i></span>
                  <input value="{{$facultadId->contacto}}" name="editarNumeroFacultad" type="text" class="form-control" id="txtEditarContacto" aria-describedby="inputGroupPrepend" required>
                  <div class="invalid-feedback">
                    Correo no valido!
                  </div>
                </div>
              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCancelEditarContacto">Cancelar</button>
                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btnEditarContacto">Guardar Cambios</button>
              </div>

            </form>

          </div>       
        </div>
      </div>
    </div>
      
  @endforeach

@endsection

@section('jsVistasAdmin')
  <script>
    $('.formEliminarFacultad').on('submit', function(e){
      e.preventDefault();
      Swal.fire({
        title: "¿Está seguro?",
        text: "Se eliminará el contacto",
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


  @if (Session::has('respuestaFacultadCrear'))
    <script>
      Swal.fire({
          title: "Informacion",
          text: "{{ session('respuestaFacultadCrear') }}",
          icon: "success"
      });
    </script>  
  @endif

  @if (Session::has('facultadEliminarRespuesta'))
    <script>
      Swal.fire({
        title: "Informacion",
        text: "{{ session('facultadEliminarRespuesta') }}",
        icon: "success"
      });
    </script>  
  @endif

  @if (Session::has('respuestaEditarFacultad'))
    <script>
      Swal.fire({
        title: "Informacion",
        text: "{{ session('respuestaEditarFacultad') }}",
        icon: "success"
      });
    </script>  
  @endif

  @if (Session::has('errorFacultad'))
    <script>
      Swal.fire({
        title: "Informacion",
        text: "{{ session('errorFacultad') }}",
        icon: "error"
      });
    </script>  
  @endif

    
@endsection