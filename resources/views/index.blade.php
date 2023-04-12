<!DOCTYPE html>
<html lang="en" data-bs-theme="auto"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ramirez Bungalows</title>

    <!-- link para bootstrap 5 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>-->
    <!-- link para la libreria de bootstrap 5 -->
    <meta name="description" content="Official open source SVG icon library for Bootstrap">
    <meta name="generator" content="Hugo 0.111.3">

    <link rel="canonical" href="https://icons.getbootstrap.com/">
    <!--<link rel="stylesheet" href="./boostrap_files/bootstrap-icons.css">
    <link rel="stylesheet" href="./boostrap_files/docs.css">-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">

    <script src="./boostrap_files/color-modes.js.descarga"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>-->

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/bugaloestilos.css', 'resources/css/docs.css'])

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

        <!-- etiqueta para los iconos de facebook - whatsapp - gmail  -->
        <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="#"  title="Facebook" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
              </svg>
              <small class="d-lg-none ms-2">Facebook</small>
            </a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="#" title="G-mail" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
              </svg>    <small class="d-lg-none ms-2">G-mail</small>
            </a>
          </li>
          <li class="nav-item col-6 col-lg-auto">
            <a class="nav-link py-2 px-0 px-lg-2" href="#" title="whatsapp" target="_blank" rel="noopener">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
              </svg>    <small class="d-lg-none ms-2">whatsapp</small>
            </a>
          </li>
          <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
          <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
          <hr class="d-lg-none my-2 text-white-50">
        </li>
        
<!-- etiqueta para el login y registro -->
                  
        <div class="body">
          <input type="checkbox" id="btn-modal">
          <label  title="Iniciar sesion" for="btn-modal" class="lbl-modal">
                <svg xmlns="http://www.w3.org/2000/svg" id="user" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                  </svg>
            </label>
          <div class="modal">
            <div class="contenedor">
              <div class="contenido">
                <form>
                  <div class="section">
                    <div class="container">
                      <div class="row full-height justify-content-center">
                      <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center" id="contedenor-login" >
                        <label for="btn-modal" id="boton-x"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                          </svg></label>
                        <h6 class="mb-0 pb-3"><span>Log in</span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                          <div class="card-3d-wrapper">
                          <div class="card-front">
                            <div class="center-wrap">
                            <div class="section text-center">
                              <h4 class="mb-4 pb-3">Iniciar Sesion
                              </h4>
                              <div class="form-group">
                              <input type="email" class="form-style" placeholder="Email">
                              <i class="input-icon uil uil-at"></i>
                              </div>
                              <div class="form-group mt-2">
                              <input type="password" class="form-style" placeholder="Password">
                              <i class="input-icon uil uil-lock-alt"></i>
                              </div>
                              <a href="#" class="btn mt-4">Iniciar Sesion</a>
                              <p class="mb-0 mt-4 text-center"><a href="#" class="link">Olvidaste tu contraseña?</a></p>
                            </div>
                            </div>
                          </div>
                          <div class="card-back">
                            <div class="center-wrap">
                            <div class="section text-center">
                              <form action="register.php" method="post">
                              <h4 class="mb-3 pb-3">Registrarse</h4>
                              <div class="form-group">
                                <input type="text" class="form-style" placeholder="Full Name" name="name">
                                <i class="input-icon uil uil-user"></i>
                              </div>
                              <div class="form-group mt-2">
                                <input type="tel" class="form-style" placeholder="Phone Number" name="phone">
                                <i class="input-icon uil uil-phone"></i>
                              </div>
                              <div class="form-group mt-2">
                                <input type="email" class="form-style" placeholder="Email" name="email">
                                <i class="input-icon uil uil-at"></i>
                              </div>
                              <div class="form-group mt-2">
                                <input type="password" class="form-style" placeholder="Password" name="pass">
                                <i class="input-icon uil uil-lock-alt"></i>
                              </div>
                              <button type="submit" class="btn mt-4" name="send">Registrate</button>
                              </form>
                            </div>
                            </form>
                            </div>
                          </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      </div>
                    </div>
                    </div>
                  </form>
                 </div>
             </div>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </nav>
</header>






<!-- scripts para la iteracion con la barra de navegacion -->
<script async="" src="./boostrap_files/bootstrap.bundle.min.js.descarga"></script>
<script async="" src="./boostrap_files/search.min.js.descarga"></script>
<script async="" src="./boostrap_files/application.min.js.descarga"></script>



<!-- etiquetas para el cuerpo de la pagina  -->
<body>
        <!-- carrusel de imagenes en el heade  -->
   <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="contenedor-carrusel-imagenes">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./img/bungalow_head.webp"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./img/Captura9.PNG" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./img/Captura.PNG" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> 
    <!-- contenido para la description de la casa  -->
    <div class="description-casa">
      <h4>Disfruta la tranquilidad de Cieneguilla</h4>
      <h2>Alquiler de casas de campo en Cieneguilla</h2>  
    </div>

  
    <!-- carrusel de imagenes slider  -->
    <br><br>
    <div class="slider" x-data="{start: true, end: false}" style="padding: 50px 50px 20px 50px;">
      <img src="./img/titulo_slider.png" class="titulo-imagen"  alt="Image">
      <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestra casa</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura2.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Dormitorio</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura3.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro servicio</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura4.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Espacio</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura5.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Comedor </h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura6.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Local</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura7.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Vista</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura8.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Comodida</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura9.PNG" alt="Image">
          <div class="slider__info">
            <h2>Nuestro Servicio</h2>
          </div>
        </div>
        <div class="slider__item">
          <img class="slider__image" src="./img/Captura.PNG" alt="Image">
          <div class="slider__info">
            <h2>Lo Que Ofrecemos</h2>
          </div>
        </div>
      </div>
      <div class="slider__nav" style="display: flex;justify-content: center;">
        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth * -1, behavior: 'smooth'});" x-bind:class="start ? '' : 'slider__nav__button--active'">Previous</button>
        <button class="slider__nav__button" x-on:click="$refs.slider.scrollBy({left: $refs.slider.offsetWidth, behavior: 'smooth'});" x-bind:class="end ? '' : 'slider__nav__button--active'">Next</button>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>



</body>




</html>