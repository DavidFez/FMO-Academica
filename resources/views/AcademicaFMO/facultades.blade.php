@extends('Layouts.index') 

@section('titulo-publico', '- Facultades')

@section('css-publico')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/facultades.css') }}">
@endsection

@section('contenido-publico')
<div class="container_table">
    <!--TABLA DE ELEMENTOS-->

    
                <div class="container text-center">
                    <div class="row">
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Medicina']) }}'"><i class="fa-solid fa-stethoscope"></i> Facultad de Medicina</div>
                      </div>

                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Jurisprudencia y Ciencias Sociales']) }}'"><i class="fa-solid fa-gavel"></i> Facultad de Jurisprudencia y Ciencias Sociales</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Ciencias Agronómicas']) }}'"> <i class="fa-solid fa-building-wheat"></i>Facultad de Ciencias Agronómicas</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Ciencias y Humanidades']) }}'">Facultad de Ciencias y Humanidades</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Ingeniería y Arquitectura']) }}'">Facultad de Ingenieía y Arquitectura</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Química y Farmacia']) }}'">Facultad de Química y Farmacia</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Odontología']) }}'">Facultad de Odontología</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Ciencias Económicas']) }}'">Facultad de Ciencias Económicas</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad de Ciencias Naturales y Matemática']) }}'">Facultad de Ciencias Naturales y Matemática</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad Multidisciplinaria de Occidente']) }}'">Facultad Multidisciplinaria de Occidente</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad Multidisciplinaria Oriente']) }}'">Facultad Multidisciplinaria Oriente</div>
                      </div>
                      <div class="col-4">
                        <div class="p-3 mb-3 faq-section-titlee btncursor" onclick="window.location='{{ route('facultadDirectorio', ['facultadContactos' => 'Facultad Multidisciplinaria Paracentral']) }}'">Facultad Multidisciplinaria Paracentral</div>
                      </div>
                      
                    

                    </div>
                  </div>
            
        
        
  
</div>

@endsection