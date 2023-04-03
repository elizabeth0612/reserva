@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href=" {{ route('admi') }} ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            <span class="ms-2 font-weight-bold text-white">Admin</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-1">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Opciones</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('inmueble') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1rem;" class="fas fa-lg fa-list-ul ps-2 pe-2 text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Inmuebles</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white"
                    href="{{ route('clientes') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i style="font-size: 1.2rem;" class="fas fa-user-circle  text-center"></i>
                    </div>
                    <span class="nav-link-text ms-1">Clientes</span>
                </a>
            </li>
            <li class="nav-item">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <a class="nav-link text-white "
                            href="{{ route('user-profile') }}">
                            <div class="text-white text-center me-1 d-flex align-items-center justify-content-center">
                                <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                            </div>
                            <span class="nav-link-text ms-1">Reservas</span>
                        </a>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#headingOne">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <a class="nav-link text-white" href="{{ route('pendientes') }}">
                                <div class="text-white text-center me-1 d-flex align-items-center justify-content-center">
                                    <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                                </div>
                                <span class="nav-link-text ms-1">Reservas Pendientes</span>
                            </a>
                        </div>
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <a class="nav-link text-white"
                                    href="{{ route('realizadas') }}">
                                    <div class="text-white text-center me-1 d-flex align-items-center justify-content-center">
                                        <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                                    </div>
                                    <span class="nav-link-text ms-1">Reservas Realizadas</span>
                                </a>
                            </div>
                        </div>

                        </div>


                        </div>
                    </li>
                    <li class="nav-item">
                     <div class="accordion" id="accordionExample">
                         <div class="accordion-item">
                           <h2 class="accordion-header" id="headingOne">
                             <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                 <a class="nav-link text-white "
                                 href="{{ route('user-profile') }}">
                                 <div class="text-white text-center me-1 d-flex align-items-center justify-content-center">
                                     <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                                 </div>
                                 <span class="nav-link-text ms-1">Informes</span>
                             </a>
                             </button>
                           </h2>
                           <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#headingOne">
                             <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                     <a class="nav-link text-white" href="{{ route('anuales') }}">
                                     <div class="text-white text-center me-1 d-flex align-items-center justify-content-center">
                                         <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                                     </div>
                                     <span class="nav-link-text ms-1">Informes anuales</span>
                                 </a>
                             </div>
                                 <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                     <a class="nav-link text-white"
                                         href="{{ route('mensuales') }}">
                                         <div class="text-white text-center me-1 d-flex align-items-center justify-content-center">
                                             <i style="font-size: 1.2rem;" class="fas fa-user-circle text-center"></i>
                                         </div>
                                         <span class="nav-link-text ms-1">Informes mensuales</span>
                                     </a>
                                 </div>
                             </div>

                             </div>

                             </div>
                             <li class="nav-item">
                                <a class="nav-link text-white " href="{{ route('static-sign-in') }}">
                                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons opacity-10">login</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Cerrar Sesion</span>
                                </a>
                            </li>
                         </div>

                       </div>

                 </li>

                    </div>

                  </div>



        </ul>
    </div>

</aside>
