<!DOCTYPE html>
<html lang="en" data-bs-theme="auto"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ramirez Bungalows</title>

    <meta name="description" content="Official open source SVG icon library for Bootstrap">
    <meta name="generator" content="Hugo 0.111.3">

    <link rel="canonical" href="https://icons.getbootstrap.com/">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">

    <script src="./boostrap_files/color-modes.js.descarga"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/bugaloestilos.css', 'resources/css/docs.css'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>



<!-- cabecera de incio contenedor padre -->
<header class="navbar navbar-expand-lg navbar-dark bd-navbar sticky-top" id="barra_de_navegacion" >
  <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap"  id="contenedor_padre" aria-label="Main navigation" >
    <div class="d-lg-none" style="width: 2.25rem;"></div>
    <!-- contenido para  el logotipo -->
    <a class="navbar-brand p-0 me-0 me-lg-2" href="index.html" aria-label="Bootstrap">
      <img src="./img/logotipoR.jpg" class="imagen_logotipo" alt="">
    </a>
    <span class="titulo_cabecera">Ramirez Bungalows</span>

    <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <i class="navbar-toggler-icon" aria-hidden="true"></i>
    </button>
    <div class="offcanvas-lg offcanvas-end flex-grow-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
      <div class="offcanvas-header px-4 pb-0" id="contenedor_navegacion">
        <h5 class="offcanvas-title text-white" id="bdNavbarOffcanvasLabel">Ramirez Bungalows</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar">
        </button>
      </div>
      <!-- contenido para el ul li nombre de subtitulos Inicio-nosotros-bungalows-galeria-contactos -->
      <div class="offcanvas-body p-4 pt-0 p-lg-0" id="contenedor_navegacion">
        <hr class="d-lg-none text-white-50">
        <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav">
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2 active" href="index.html" id="subtitulo_nav"  rel="noopener">Inicio</a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="#" id="subtitulo_nav"  rel="noopener">Nosotros</a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2 " href="#" id="subtitulo_nav"  rel="noopener" >Bungalows</a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="#" id="subtitulo_nav"  rel="noopener">Galeria</a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="#" id="subtitulo_nav"  rel="noopener">Contacto</a>
          </li>

        </ul>

        <!-- para la lineas en la separacion -->
        <hr class="d-lg-none text-white-50">

        <!-- etiqueta para los iconos de iniciar sesion y register -->
        <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
            <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
            <hr class="d-lg-none my-2 text-white-50">
          </li>
        </ul>

<!-- etiqueta para el login y registro icono -user / iniciar sesion y registrarse -->


            <div class="dropdown">
              <a class="" id="dropdownMenuButton1" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="true">
                <svg xmlns="http://www.w3.org/2000/svg" id="user" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
              </a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar sesion</a></li>
                <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
              </ul>
            </div>

    </div>
  </nav>
</header>

<body>
 <h2 class="titulo_index">Titulo de pagina</h2>
    <div class="contendor_descripcion">
        <article class="articulo_descripcion">
            <h2>Casa de playa en alquiler  </h2>
            <img src="imagen.png" class="imagen_casa" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dignissimos iste voluptates at, deleniti minus cupiditate consequatur perspiciatis excepturi, dolores sed delectus consectetur assumenda? Numquam in aperiam cumque molestiae assumenda!</p>
            <button type="submit"class="boton_reserva">Reservar</button>
            
        </article>

        <article class="articulo_descripcion">
            <h2>Playa caballero punta</h2>
            <img src="imagen.png" class="imagen_casa" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dignissimos iste voluptates at, deleniti minus cupiditate consequatur perspiciatis excepturi, dolores sed delectus consectetur assumenda? Numquam in aperiam cumque molestiae assumenda!</p>
            <button type="submit" class="boton_reserva">Reservar</button>
        </article>

        <article class="articulo_descripcion">
            <h2>Playa Cuzco, Miraflores </h2>
            <img src="imagen.png" class="imagen_casa" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dignissimos iste voluptates at, deleniti minus cupiditate consequatur perspiciatis excepturi, dolores sed delectus consectetur assumenda? Numquam in aperiam cumque molestiae assumenda!</p>
            <button type="submit" class="boton_reserva">Reservar</button>
        </article>
    </div>

</body>




</html>
