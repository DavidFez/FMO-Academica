<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACADÉMICA FMO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f3b9f07ba0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bienvenida.css') }}">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <div class="row">
                        <div class="col-12 col-md-12 d-flex">
                                    <!--posicion de la imagen dentro del contenedor-->
                                        <div class="row">
                                            <div class="col-6 col-md-12 d-flex">
                                                <div class=""> <!--Padding y margin del texto-->
                                                    <img src="{{ asset('images/logoues.png') }}" alt="" class="img-fluid-logo">
                                                </div> 
                                            </div>        
                                                                                 
                                        </div>
                                        <div class="row">
                                            <div class="col-6 col-md-12 d-flex">
                                                <div class="p-2"> <!--Padding y margin del texto-->
                                                    <a href="#">Académica FMO</a>
                                                </div> 
                                            </div>                                              
                                        </div>
                                        
                                    
                        </div>

                    </div>


















                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#paginas" data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-list pe-2"></i>
                            Trámites Académicos
                        </a>
                        <ul id="paginas" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Equivalencias</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Cambio de Carrera</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Traslado</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Retiro Oficial</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Activación</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Reingreso</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Modificar/Actualizar Nombre</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Recuperar contraseña del EEL</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Confrontación de documentos</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Otros</a>
                            </li>
                        </ul>
                    </li>
                   
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar">
                <button class="btn" id="sidebar-toggle">        <!--BOTON DE HERRAMIENTAS DEL SIDEBAR-->
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="navbar navbar-expand-lg bg-body-tertiary menuNav">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="https://eel.ues.edu.sv/ingreso" target="_blank">Inicio</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://eel.ues.edu.sv/ingreso" target="_blank">Nuevo Ingreso</a>
                                </li><!--Fin de lista de nuevo ingreso-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Planes de Estudio
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropend">
                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Carreras de Pregrado
                                            </a>
                                            <ul class="dropdown-menu">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Ingeniería y Arquitectura
                                                </a>
                                            <li class="nav-item dropend">
                                            <ul class="dropdown-menu">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Ingeniería de Sistemas Informaticos
                                                </a>
                                            </li>
                                                <li><a class="dropdown-item" href="#">Ingeniería y Arquitectura</a></li>
                                                <li><a class="dropdown-item" href="#">Medicina</a></li>
                                                <li><a class="dropdown-item" href="#">Ciencias y Humanidades</a></li>
                                                <li><a class="dropdown-item" href="#">Jurisprudencia y Ciencias Sociales</a></li>
                                                <li><a class="dropdown-item" href="#">Ciencias Económicas</a></li>
                                                <li><a class="dropdown-item" href="#">Ciencias Naturales y Matemática</a></li>
                                                <li><a class="dropdown-item" href="#">Química y Farmacia</a></li>
                                                <li><a class="dropdown-item" href="#">Ciencias Agronómicas</a></li>
                                            </ul>
                            
                            
                            
                                            <li><a class="dropdown-item" href="#">Ingeniería y Arquitectura</a></li>
                                            <li><a class="dropdown-item" href="#">Medicina</a></li>
                                            <li><a class="dropdown-item" href="#">Ciencias y Humanidades</a></li>
                                            <li><a class="dropdown-item" href="#">Jurisprudencia y Ciencias Sociales</a></li>
                                            <li><a class="dropdown-item" href="#">Ciencias Económicas</a></li>
                                            <li><a class="dropdown-item" href="#">Ciencias Naturales y Matemática</a></li>
                                            <li><a class="dropdown-item" href="#">Química y Farmacia</a></li>
                                            <li><a class="dropdown-item" href="#">Ciencias Agronómicas</a></li>
                                            </ul>

                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Carreras de Posgrado
                                            </a>

                                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Carreras Técnicas
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Directorio de Contactos</a>
                                </li><!--Fin de lista de contactos-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Calendario Oficial
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropend">                                            
                                            <a class="dropdown-item nav-link" href="http://www.fmoues.edu.sv/" target="_blank">Calendario Administrativo</a>                                            
                                            <a class="dropdown-item nav-link" href="http://www.fmoues.edu.sv/" target="_blank">Calendario Académico</a>                                    
                                        </li>
                                    </ul>
                                </li><!--Fin de lista del calendario Oficial-->
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Educación a Distancia</a>
                                </li><!--Fin de lista de carreras de educación a distancia-->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sitios de Interés
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item dropend">
                                            <a class="dropdown-item" href="http://www.fmoues.edu.sv/" target="_blank">UES-FMO</a>
                                            <a class="dropdown-item" href="https://www.ues.edu.sv/" target="_blank">UES-Sitio Principal</a>
                                            <a class="dropdown-item" href="https://eel.ues.edu.sv/ingreso" target="_blank">UES-Nuevo Ingreso</a>
                                            <a class="dropdown-item" href="https://www.uese.ues.edu.sv/" target="_blank">UES-Socio Económico</a>
                                            <a class="dropdown-item" href="http://proyeccionsocial.fmoues.edu.sv/" target="_blank">UES-Proyección Social</a>
                                            <a class="dropdown-item" href="https://saa.ues.edu.sv/" target="_blank">UES-SAA</a>
                                        </li>
                                    </ul><!--Fin de opciones de sitios de interés-->
                                </li><!--Fin de lista sitios-->
                            
                            </ul>
                        </div>
                        </div>
                    </div>
            </nav>

            

            <!-- TARJETA DE LAS SECCIONES DEL CONTENIDO DE LA WEB-->
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4>PLATAFORMAS DE INTERES</h4>
                    </div>
                    <!-- contenedor de tarjetas de plataformas-->
                        <div class="row">
                            <div class="col-12 col-md-4 d-flex">
                                <div class="card flex-fill border-0 illustration">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row g-0 w-100"> <!--posicion de la imagen dentro del contenedor-->
                                            <div class="col-6">
                                                <div class="p-3 m-1"> <!--Padding y margin del texto-->
                                                    <h4>CAMPUS VIRTUAL</h4>                                                    
                                                    <a class="btn btn-secondary" href="https://virtual.fmoues.edu.sv/login/index.php" target="_blank" role="button">Acceder</a>
                                                </div>                                               
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('images/moodleues.png') }}" class="img-fluid illustration" salt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 d-flex">
                                <div class="card flex-fill border-0 illustration">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row g-0 w-100"> <!--posicion de la imagen dentro del contenedor-->
                                            <div class="col-6">
                                                <div class="p-3 m-1"> <!--Padding y margin del texto-->
                                                    <h4>EXPEDIENTE EN LINEA</h4>
                                                    <a class="btn btn-secondary" href="https://eel.ues.edu.sv/" target="_blank" role="button">Acceder</a>
                                                </div>                                               
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('images/logoues.png') }}" class="img-fluid illustration" salt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12 col-md-4 d-flex">
                                <div class="card flex-fill border-0 illustration">
                                    <div class="card-body p-0 d-flex flex-fill">
                                        <div class="row g-0 w-100"> <!--posicion de la imagen dentro del contenedor-->
                                            <div class="col-6">
                                                <div class="p-3 m-1"> <!--Padding y margin del texto-->
                                                    <h4>EXPEDIENTE MOVIL</h4>
                                                    <p class="mb-0">
                                                    
                                                    </p>
                                                    <a class="btn btn-secondary" href="https://play.google.com/store/apps/details?id=meel.ganimedes&hl=es&gl=US" target="_blank" role="button"><i class="fa-brands fa-google-play"></i></a>
                                                    <a class="btn btn-secondary" href="https://play.google.com/store/apps/details?id=meel.ganimedes&hl=es&gl=US" target="_blank" role="button"><img src="{{ asset('images/HUAWEI.png') }}" class="img-fluid-logo" salt=""></i></a>
                                                </div>                                               
                                            </div>
                                            <div class="col-6 align-self-end text-end">
                                                <img src="{{ asset('images/appues.png') }}" class="img-fluid illustration" salt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            


                        </div>
                        <!--TABLA DE ELEMENTOS-->
                        <div class="card border-0">
                            <div class="card-header">
                                <h5 class="card-tittle">
                                    ANUNCIOS ACADÉMICOS
                                </h5>
                                <div id="carouselExampleCaptions" class="carousel slide">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                           

                                            <div class="card flex-fill border-0 illustration tamilu">
                                                <div class="card-body p-10 d-flex flex-fill align-items-center">
                                                    <div class="row g-0 w-100"> <!--posicion de la imagen dentro del contenedor-->
                                                        <div class="col-12">
                                                            <div class="p-5 m-1 text-center"> <!--Padding y margin del texto-->
                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                <h5>PERÍODO VACACIONAL DE FIN DE AÑO</h5>
                                                                    <button type="button" class="btn btn-secondary">Más detalles</button>
                                                                </div>
                                                            </div>                                               
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card flex-fill border-0 illustration tamilu">
                                                <div class="card-body p-10 d-flex flex-fill align-items-center">
                                                    <div class="row g-0 w-100"> <!--posicion de la imagen dentro del contenedor-->
                                                        <div class="col-12">
                                                            <div class="p-5 m-1 text-center"> <!--Padding y margin del texto-->
                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                <h5>INICIO DE TRÁMITES</h5>
                                                                    <p>¡A partir del 16 de Enero en horario normal!</p>
                                                                </div>
                                                            </div>                                               
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="card flex-fill border-0 illustration tamilu">
                                                <div class="card-body p-10 d-flex flex-fill align-items-center">
                                                    <div class="row g-0 w-100"> <!--posicion de la imagen dentro del contenedor-->
                                                        <div class="col-12">
                                                            <div class="p-5 m-1 text-center"> <!--Padding y margin del texto-->
                                                                <div class="carousel-caption d-none d-md-block text-dark">
                                                                <h5>INICIO DE CLASES FMO</h5>
                                                                <p>¡Ciclo I-2024!</p>
                                                                </div>
                                                            </div>                                               
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                </div> <!--container fluid-->
            </main>
            <a href="#" class="theme-toggle">
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-sun"></i>
            </a>
            <footer class="footer">
                <div class="">
                    <div class="row">
                        <div class="col-8">
                            <p class="mb-0">
                                <a href="#" class="textc">
                                    © Universidad de El Salvador, Facultad Multidisciplinaria Oriental, Administración Académica, 2024 | Reservados todos los derechos.
                                    
                                </a>
                            </p>
                        </div>
                        <div class="col-4 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="textc">Contacto</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="textc">Informacion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="notificacion">
        <p>Bienvenido a Academica!</p>
        <span class="notificacion_progreso"></span>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('AdminJS/tema.js') }}"></script>
    <script src="{{ asset('AdminJS/scriptNav.js') }}"></script>
</body>
</html>