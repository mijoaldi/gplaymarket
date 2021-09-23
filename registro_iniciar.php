<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
    <title>Login y Register</title>
    <link rel="stylesheet" href="./Recursos/css/styloLoginRegis.css">
    
</head>
<body class="fondoNombre">
     <!------------------->
    <!--ENCABEZADO-->
    <!------------------->
    
    <nav class="navbar navbar-expand-lg 
    navbar-light bg-light p-3" id="menu">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
             <span class="text-primary fs-5 fw-bold"><a href="./inicio.html"><img  legnth="100px" width="120px"  src="./Recursos/imagenes/LogoCompleto.png"></a></span>
          </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./quienesSomos.html">Quienes Somos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./Recursos/imagenes/FunkoPop.png" length="80px" width="100px">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="./funkoPop_Marvel.html">Marvel</a></li>
                  <li><a class="dropdown-item" href="./funkoPop_Marvel.html">Disney</a></li>
                  <li><a class="dropdown-item" href="./funkoPop_Marvel.html">Programas de TV</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./Recursos/imagenes/Figura De Acción.png" length="80px" width="100px">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="./personajesAccion.html">Marvel</a></li>
                  <li><a class="dropdown-item" href="./personajesAccion.html">Disney</a></li>
                  <li><a class="dropdown-item" href="./personajesAccion.html">Programas de TV</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./Recursos/imagenes/Cómic.png" length="80px" width="100px">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="./comic.html">Aventura</a></li>
                  <li><a class="dropdown-item" href="./comic.html">Ciencia Ficción</a></li>
                  <li><a class="dropdown-item" href="./comic.html">Video Juegos</a></li>
                  <li><a class="dropdown-item" href="./comic.html">Terror</a></li>
                  <li><a class="dropdown-item" href="./comic.html">Comedia</a></li>
                  <li><a class="dropdown-item" href="./comic.html">Anime</a></li>
                </ul>
              </li>
            </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" 
                aria-label="search">
                <button class="btn btn-outline-dark btn-primary-outline-success" 
                type="button"><img src="./Recursos/imagenes/buscar.png" alt=""></button>
              </form>
            </div>

        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./inicio.html" ><img length="50px" width="50px" src="./Recursos/imagenes/Home1.png"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./registro_iniciar.html" ><img length="50px" width="50px" src="./Recursos/imagenes/usur.png"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.
              html" ><img length="50px" width="50x" src="./Recursos/imagenes/carrito1.png"></a>
            </li>
          </ul>
        
    </nav>

    <main>
        <!--Cajas o contenedores traseras-->
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <!--login-->
                <div class="caja__trasera_login">
                    <h1>¿Ya tienes cuenta?</h1>
                    <p>Iniciar sesión para entrar en la página</p>
                    <button id="btn__iniciar_sesion">Iniciar Sesión</button>
                </div>
                <!--register-->
                <div class="caja__trasera_register">
                    <h1>¿Aún no tienes cuenta?</h1>
                    <p>Regístrese para que pueda Iniciar Sesión</p>
                    <button id="btn__Registrarse">Registrarse</button>
                </div>
            </div> 
        
            <!--formulario Login/Register-->
            <div class="contenedor__login_register">
                <!--login-->
                <form action="" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Correo Electrónico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!--register-->
                <form action="" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo">
                    <input type="email" placeholder="Correo Electrónico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./Recursos/script.js"></script>
</body>
</html>