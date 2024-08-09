<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')

    @vite('resources/css/app.css')

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"  rel="stylesheet" />
    @yield('css')

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
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
     <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
      </script>

</head>
<body class="bg-gray-100 dark:bg-gray-800">

    <div class="div-loader" id="loader">
        <div class="loader"></div>
    </div>
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="https://flowbite.com" class="flex ms-2 md:me-24">
            <img src="{{ asset('images/logo-transparente.png') }}" class="h-12 me-3" alt="" />
            <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white"></span>
          </a>
        </div>
        <div>
            <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
            </button>

        </div>
        <div class="flex items-center">
            <div class="flex items-center ms-3">
              <div>
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                </button>
              </div>
              <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Neil Sims
                  </p>
                  <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                    neil.sims@flowbite.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                  </li>
                  <li>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
      </div>
    </div>
</nav>

  <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-900 dark:border-gray-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-900">
        <ul class="space-y-2 font-medium">
           <li class="border-b-2 dark:border-gray-800">
              <a href="/inicio" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                 <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                 </svg>
                 <span class="ms-3">Dashboard</span>
              </a>
           </li>

          <li class="border-b-2 dark:border-gray-800">
            <a href="{{ route('asistencias') }}" type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 48 48"><g fill="none" stroke="#666666" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="m34 10l8 8m0-8l-8 8m10 12l-7 8l-4-4"/><path fill="#666666" d="M26 10H4v8h22zm0 20H4v8h22z"/></g></svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Asistencias</span>

            </a>

          </li>
           <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.78" height="20" viewBox="0 0 384 432"><path fill="#666666" d="M341 45q18 0 30.5 12.5T384 88v299q0 17-12.5 29.5T341 429H43q-18 0-30.5-12.5T0 387V88q0-18 12.5-30.5T43 45h89q7-19 23.5-30.5T192 3t36.5 11.5T252 45zm-149 0q-9 0-15 6.5t-6 15t6 15t15 6.5t15-6.5t6-15t-6-15t-15-6.5m43 299v-43H85v43zm64-85v-43H85v43zm0-86v-42H85v42z"/></svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Solicitudes</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example" class="hidden py-2 space-y-2">
                 <li>
                    <a href="{{ route('solicitudes-pendientes') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Solicitudes Pendientes</a>
                 </li>
                 <li>
                    <a href="{{ route('historial-solicitudes') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Historial de Solicitudes</a>
                 </li>

            </ul>
           </li>
          <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example1" data-collapse-toggle="dropdown-example1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#666666" d="M14 12h1.5v2.82l2.44 1.41l-.75 1.3L14 15.69zM4 2h14a2 2 0 0 1 2 2v6.1c1.24 1.26 2 2.99 2 4.9a7 7 0 0 1-7 7c-1.91 0-3.64-.76-4.9-2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2m0 13v3h4.67c-.43-.91-.67-1.93-.67-3zm0-7h6V5H4zm14 0V5h-6v3zM4 13h4.29c.34-1.15.97-2.18 1.81-3H4zm11-2.85A4.85 4.85 0 0 0 10.15 15c0 2.68 2.17 4.85 4.85 4.85A4.85 4.85 0 0 0 19.85 15c0-2.68-2.17-4.85-4.85-4.85"/></svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Horarios</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example1" class="hidden py-2 space-y-2">
                 <li>
                    <a href="{{ route('horarios') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Horarios</a>
                 </li>
                 <li>
                    <a href="{{ route('horarios-registrar') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Registrar Horario</a>
                 </li>
          </ul>
          </li>

          <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#666666" d="M2 2h2v18h18v2H2zm5 8h10v3H7zm4 5h10v3H11zM6 4h16v4h-2V6H8v2H6z"/></svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Historiales</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example3" class="hidden py-2 space-y-2">
                 <li>
                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                 </li>
                 <li>
                    <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                 </li>
            </ul>
          </li>
          <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 640 512"><path fill="#666666" d="M144 0a80 80 0 1 1 0 160a80 80 0 1 1 0-160m368 0a80 80 0 1 1 0 160a80 80 0 1 1 0-160M0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96H21.3C9.6 320 0 310.4 0 298.7M405.3 320h-.7c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7c58.9 0 106.7 47.8 106.7 106.7c0 11.8-9.6 21.3-21.3 21.3H405.4zM224 224a96 96 0 1 1 192 0a96 96 0 1 1-192 0m-96 261.3c0-73.6 59.7-133.3 133.3-133.3h117.3c73.7 0 133.4 59.7 133.4 133.3c0 14.7-11.9 26.7-26.7 26.7H154.6c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Usuarios</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example4" class="hidden py-2 space-y-2">
                 <li>
                    <a href="/usuarios" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista de Usuarios</a>
                 </li>
                 <li>
                    <a href="{{ route('usuarios-registrar') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Registrar Usuario</a>
                 </li>
            </ul>
          </li>
          <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example5" data-collapse-toggle="dropdown-example5">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="#666666" d="M216 40H40a16 16 0 0 0-16 16v144a16 16 0 0 0 16 16h13.39a8 8 0 0 0 7.23-4.57a48 48 0 0 1 86.76 0a8 8 0 0 0 7.23 4.57H216a16 16 0 0 0 16-16V56a16 16 0 0 0-16-16M104 168a32 32 0 1 1 32-32a32 32 0 0 1-32 32m112 32h-56.57a64 64 0 0 0-13.16-16H192a8 8 0 0 0 8-8V80a8 8 0 0 0-8-8H64a8 8 0 0 0-8 8v96a8 8 0 0 0 6 7.75A63.7 63.7 0 0 0 48.57 200H40V56h176Z"/></svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Docentes</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example5" class="hidden py-2 space-y-2">
                 <li>
                    <a href="{{ route('docentes') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista de Docentes</a>
                 </li>
                 <li>
                    <a href="{{ route('docentes-registrar') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Registrar Docente</a>
                 </li>

            </ul>
          </li>
          <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example6" data-collapse-toggle="dropdown-example6">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 36 36"><ellipse cx="18" cy="11.28" fill="#666666" rx="4.76" ry="4.7"/><path fill="#666666" d="M10.78 11.75h.48v-.43a6.7 6.7 0 0 1 3.75-6a4.62 4.62 0 1 0-4.21 6.46Zm13.98-.47v.43h.48A4.58 4.58 0 1 0 21 5.29a6.7 6.7 0 0 1 3.76 5.99m-2.47 5.17a21.5 21.5 0 0 1 5.71 2a2.7 2.7 0 0 1 .68.53H34v-3.42a.72.72 0 0 0-.38-.64a18 18 0 0 0-8.4-2.05h-.66a6.66 6.66 0 0 1-2.27 3.58M6.53 20.92A2.76 2.76 0 0 1 8 18.47a21.5 21.5 0 0 1 5.71-2a6.66 6.66 0 0 1-2.27-3.55h-.66a18 18 0 0 0-8.4 2.05a.72.72 0 0 0-.38.64V22h4.53Zm14.93 5.77h5.96v1.4h-5.96z"/><path fill="#666666" d="M32.81 21.26h-6.87v-1a1 1 0 0 0-2 0v1H22v-2.83a20 20 0 0 0-4-.43a19.3 19.3 0 0 0-9.06 2.22a.76.76 0 0 0-.41.68v5.61h7.11v6.09a1 1 0 0 0 1 1h16.17a1 1 0 0 0 1-1V22.26a1 1 0 0 0-1-1m-1 10.36H17.64v-8.36h6.3v.91a1 1 0 0 0 2 0v-.91h5.87Z"/></svg>
                  <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Empleados</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example6" class="hidden py-2 space-y-2">
                 <li>
                    <a href="{{ route('empleados') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista de Empleados</a>
                 </li>
                 <li>
                    <a href="{{ route('empleados-registrar') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Registrar Empleado</a>
                 </li>

            </ul>
          </li>
          <li class="border-b-2 dark:border-gray-800">
            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example7" data-collapse-toggle="dropdown-example7">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="#666666" d="M36.571 475.429h73.143V365.714H36.571zM109.714 36.57H36.571v182.86h73.143zm182.857 0H219.43v73.143h73.142zM0 329.143h146.286V256H0zm219.429 146.286h73.142V256H219.43zm-36.572-256h146.286v-73.143H182.857zM475.43 36.57h-73.143V256h73.143zm-109.715 256v73.143H512V292.57zm36.572 182.858h73.143v-73.143h-73.143z"/></svg>
                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">General</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                  </svg>
            </button>
            <ul id="dropdown-example7" class="hidden py-2 space-y-2">
                 <li>
                    <a href="{{ route('roles') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Roles</a>
                 </li>
                 <li>
                    <a href="{{ route('aulas') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Aulas</a>
                 </li>
                 <li>
                    <a href="{{ route('periodos') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Periodos</a>
                 </li>
                 <li>
                    <a href="{{ route('clases') }}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Clases</a>
                 </li>
           </ul>
          </li>
        </ul>
     </div>
  </aside>

  <div class="sm:ml-64 pt-16 dark:bg-gray-800">
    <div class="p-3 border-b-2 border-gray-200 dark:border-gray-700  bg-white  dark:bg-gray-900">
        <header>
            <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-900">

                <div class="flex flex-wrap gap-2 justify-between items-center mx-auto max-w-screen-xl">
                    <div class="flex gap-3 items-center justify-center flex-wrap">
                        @yield('header')

                        @yield('button')
                    </div>
                   <div>
                    @yield('breadcrumb')

                   </div>

                </div>
            </nav>
        </header>
    </div>
    <div class="dark:text-white p-4">
        @yield('content')
     </div>
 </div>






      <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<script>
    var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    themeToggleLightIcon.classList.remove('hidden');
} else {
    themeToggleDarkIcon.classList.remove('hidden');
}

var themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle('hidden');
    themeToggleLightIcon.classList.toggle('hidden');

    // if set via local storage previously
    if (localStorage.getItem('color-theme')) {
        if (localStorage.getItem('color-theme') === 'light') {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }

    // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains('dark')) {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        } else {
            document.documentElement.classList.add('dark');
            localStorage.setItem('color-theme', 'dark');
        }
    }

});

</script>
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
</body>
</html>

