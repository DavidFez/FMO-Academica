<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Académica FMO</title>
    <link rel="shortcut icon" href="{{ asset('iconoFacultad/logoues.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bienvenida.css') }}">
</head>
<body>

    <div class="offcanvas offcanvas-start modal-z-index" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Trámites Académicos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        
            <div class="dropdown mt-3">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#paginas" data-bs-toggle="collapse" aria-expanded="false">
                    <i class="fa-solid fa-list pe-2"></i>
                    Trámites Académicos
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
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
    </div>
    <header id="header">
        <div class="container__header">
            <div class="logo">
                <img src="images/logoues.png" alt="" class="imgLogo">
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="#" class="select">INICIO</a></li>
                        <li><a href="https://eel.ues.edu.sv/ingreso" target="_blank">NUEVO INGRESO</a></li>

                        <li><a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PLANES DE ESTUDIO</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropend">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Carreras de Pregrado
                                    </a>        
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Carreras de Posgrado
                                    </a>        
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Carreras Técnicas
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">DIRECTORIO</a></li>
                        <li><a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">CALENDARIO OFICIAL</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropend">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ADMINISTRATIVO
                                    </a>        
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ACADÉMICO
                                    </a>        
                                </li>
                            </ul>
                        </li>
                        
                        <li><a href="#">EDUCACIÓN A DISTANCIA</a></li>
                        <li><a href="#">FACULTADES</a></li>
                    </ul>
                </nav>

                
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>

            </div>

        </div>
    </header>

    <div class="container__all" id="container_all">

        <div class="cover">

            <div class="container__cover">

                <div class="container__info">
                    <h1>ADMINISTRACIÓN</h1>
                    <h2>ACADÉMICA FMO</h2>
                    <p class="bienvenidaFMO">Bienvenidos al sitio web oficial de la Administración Académica de la Facultad Multidisciplinario Oriental
                        de la Universidad de El Salvador. Encontrarás información relacionada a trámites académicos de tu interés, así como anuncios,
                        entre otros asuntos importantes.</p>

                            <a class="btn btn-primary btn-tramites" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            Ver Trámites Académicos
                            </a>

                </div>
                <div class="container__vector" >
                    <img src="images/nueva.png" alt="" >
                </div>
            </div>

        </div>
        <Footer>
            <div class="container__footer">

                <div class="box__footer">
                    <h2>SITIOS DE INTERÉS</h2>
                    <a href="http://www.fmoues.edu.sv/" target="_blank">UES-FMO</a>
                    <a href="https://www.ues.edu.sv/" target="_blank">UES-SITIO PRINCIPAL</a>
                    <a href="https://www.uese.ues.edu.sv/" target="_blank"><i class="fa-solid fa-scale-balanced"></i> UES-SOCIOECONÓMICO</a>
                    <a href="http://proyeccionsocial.fmoues.edu.sv/" target="_blank">UES-PROYECCIÓN SOCIAL</a>
                    <a href="https://saa.ues.edu.sv/" target="_blank">UES-SAA</a>
                </div>

                <div class="box__footer">
                    <h2>Plataformas</h2>
                    <a href="#">Aula Virtual UES</a>
                    <a href="#">Expediente en Línea</a>
                    <a href="#">Expediente Móvil</a>
                </div>

                <div class="box__footer">
                    <h2>Medios de contacto</h2>
                    <a href="#"><i class="fab fa-facebook-square"></i> Facebook</a>
                    <a href="#"><i class="fa-solid fa-envelope"></i> academicafmo@ues.edu.sv</a>
                    <a href="#"><i class="fa-solid fa-phone"></i> 2664 - 0000</a>
                    <a href="#" class="ubicado"><i class="fa-solid fa-location-dot"></i> Km. 144 Carretera al Cuco, Cantón El Jute, San Miguel. El Salvador, Centro América.</a>
                </div>
            </div>

            <div class="box__copyright">
                <hr>
                <p>Todos los derechos reservados © 2024 - 2024<b>Académica FMO</b></p>
            </div>
        </Footer>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/principalWave.js"></script>
</body>
</html>