<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  @yield('title')

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap/css/bootstrap.min.css') }}  ">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/fontawesome/css/all.min.css') }} ">
  @vite('resources/css/app.css')

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/jqvmap/dist/jqvmap.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/weather-icon/css/weather-icons-wind.min.css') }} ">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/summernote/summernote-bs4.css') }}">
  <link rel="stylesheet" href="{{ asset('backend/assets/modules/jquery-selectric/selectric.css') }}">

  <link rel="stylesheet" href="{{ asset('backend/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
  @yield('css')

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }} ">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/components.css') }} ">

  <style>
    /* HTML:  */
    .errors{
        color: red;
        /* transform: rotate(-10deg) skewY(10deg); */
        font-style: oblique;
        font-weight: 550;
        padding-left: 5px;

    }

    .div-loader{
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(228, 230, 225, 1);
        position: fixed;
        z-index: 999999;
    }
    .loader {
      width: 50px;
      padding: 8px;
      aspect-ratio: 1;
      border-radius: 50%;
      background: #25b09b;
      --_m:
        conic-gradient(#0000 10%,#000),
        linear-gradient(#000 0 0) content-box;
      -webkit-mask: var(--_m);
              mask: var(--_m);
      -webkit-mask-composite: source-out;
              mask-composite: subtract;
      animation: l3 1s infinite linear;
    }
    @keyframes l3 {to{transform: rotate(1turn)}}
   </style>

    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-94034622-3');
    </script>
</head>

<body>
    <div class="div-loader" id="loader">
        <div class="loader"></div>
    </div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  {{-- <img class="mr-3 rounded" width="30" src="assets/img/products/product-3-50.png" alt="product"> --}}
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  {{-- <img class="mr-3 rounded" width="30" src="assets/img/products/product-2-50.png" alt="product"> --}}
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  {{-- <img class="mr-3 rounded" width="30" src="assets/img/products/product-1-50.png" alt="product"> --}}
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              {{-- <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Dedik Sugiharto</b>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle">
                    <div class="is-online"></div>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-avatar">
                    <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle">
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b>
                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div> --}}
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              {{-- <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div> --}}
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            {{-- <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1"> --}}
            <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/inicio">Control de aulas</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/inicio">SCA</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="/inicio">Panel de Inicio</a></li>
              </ul>
            </li>
            <li class="menu-header">Seguimiento</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Solicitudes</span></a>
              <ul class="dropdown-menu">
                @role('Docente')
                <li><a class="nav-link" href="{{ route('solicitudes-crear') }}">Realizar Solicitud</a></li>
                <li><a class="nav-link" href="{{ route('mis-solicitudes') }}">Mis Solicitudes</a></li>
                @endrole
                @role('Administrador')
                <li><a class="nav-link" href="{{ route('solicitudes-pendientes') }}">Solicitudes Pendientes</a></li>
                <li><a class="nav-link" href="{{ route('historial-solicitudes') }}">Historial de Solicitudes</a></li>
                @endrole
              </ul>
            </li>
            {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Agendas</span></a>
              <ul class="dropdown-menu">
                @role('Docente')
                <li><a class="nav-link" href="">Programar Horarios</a></li>
                @endrole
                @role('Administrador')
                <li><a class="nav-link" href="">Agendas Programadas</a></li>
                @endrole
                <li><a class="nav-link" href="">Mis Agendas Programadas</a></li>
                @role('Administrador')
                <li><a class="nav-link" href="">Historial de Horarios</a></li>
                @endrole
                <li><a class="nav-link" href="">Mi Historial de Horarios</a></li>

              </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Asistencias</span></a>
                <ul class="dropdown-menu">
                    @role('Administrador')
                  <li><a class="nav-link" href="">Marcar Asistencia</a></li>
                  <li><a class="nav-link" href="">Asistencias por Docente</a></li>
                  @endrole
                  {{-- <li><a class="nav-link" href="">Mi Historial de Asistencias</a></li> --}}
                </ul>
              </li>
              <li class="menu-header">Reportería</li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Historiales</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="">Mi Historial de Asistencias</a></li>
                    <li><a class="nav-link" href="">Mi Historial de Horarios</a></li>
                    @role('Administrador')
                    <li><a class="nav-link" href="">Historial de Horarios</a></li>
                    <li><a class="nav-link" href="">Historial General de Asistencias</a></li>
                    @endrole
                </ul>
              </li>
              @role('Administrador')
              <li class="menu-header">Usuarios y Docentes</li>
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Usuarios</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="/usuarios">Lista de Usuarios</a></li>
                  <li><a class="nav-link" href="{{ route('usuarios-registrar') }}">Crear Usuario</a></li>
                  <li><a class="nav-link" href="">Asignar Roles</a></li>
                </ul>
              </li>
              {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}
              <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Docentes</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('docentes') }}">Lista de Docentes</a></li>
                  <li><a class="nav-link" href="{{ route('docentes-registrar') }}">Registrar Docente</a></li>
                </ul>
              </li>

                <li class="menu-header">Administración</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Empleados</span></a>
                    <ul class="dropdown-menu">
                      <li><a class="nav-link" href="{{ route('empleados') }}">Lista de Empleados</a></li>
                      <li><a class="nav-link" href="{{ route('empleados-registrar') }}">Registrar Empleado</a></li>
                      {{-- <li><a class="nav-link" href="">Asignar Roles</a></li> --}}
                    </ul>
                  </li>
                <li class="dropdown">
                  <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>General</span></a>
                  <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('roles') }}">Roles</a></li>
                    <li><a class="nav-link" href="{{ route('aulas') }}">Aulas</a></li>
                    <li><a class="nav-link" href="{{ route('periodos') }}">Periodos</a></li>
                    <li><a class="nav-link" href="{{ route('clases') }}">Clases</a></li>

                  </ul>
                </li>
                @endrole
                {{-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> --}}
            <li class="menu-header">Configuración de Cuenta</li>
            <li class="dropdown mb-4">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Mi Perfil</span></a>
              <ul class="dropdown-menu">
                <li><a href="">Perfil de Usuario</a></li>
                <li><a href="">Cambiar Contraseña</a></li>
                <li><a href="">Actualizar Usuario</a></li>
              </ul>
            </li>
           </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
                @yield('btn-return')
            </div>
                @yield('header')
            <div class="section-header-button">
                @yield('button')
            </div>
            <div class="section-header-breadcrumb">
              @yield('breadcrumb')
            </div>
          </div>
           @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <script src="{{ asset('backend/assets/modules/jquery.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/popper.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/tooltip.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/moment.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('backend/assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/chart.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/summernote/summernote-bs4.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
  <script src="{{ asset('backend/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>


  <!-- Page Specific JS File -->
  <script src="{{ asset('backend/assets/js/page/index-0.js') }}"></script>
  {{-- <script src="{{ asset('backend/assets/js/page/features-post-create.js') }}"></script> --}}

  <!-- Template JS File -->
  <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

  <script>
    // $(function(){
    //     setTimeout(() => {
    //         $(".div-loader").fadeOut(100)
    //     },500);
    // })

    window.addEventListener('load', function() {
    // Obtiene el elemento del loader
    var loader = document.getElementById('loader');

    // Oculta el loader estableciendo la propiedad CSS 'display' a 'none'
    loader.style.display = 'none';
});
  </script>
  @yield('js')

</body>
</html>
