
@extends('layout.app5')
@section('title')
<title>Solicitudes Pendientes</title>
@stop
@section('header')
<a href="/inicio" type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
    </svg>
    <span class="sr-only">Icon description</span>
</a>
<span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Gestión de Solicitudes</span>
@stop
@section('button')
<a href="/solicitudes/historial" type="button" class="flex focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"><path fill="#ffffff" d="M5 8.25a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5h-4A.75.75 0 0 1 5 8.25M4 10.5A.75.75 0 0 0 4 12h4a.75.75 0 0 0 0-1.5z"/><path fill="#ffffff" d="M13-.005c1.654 0 3 1.328 3 3c0 .982-.338 1.933-.783 2.818c-.443.879-1.028 1.758-1.582 2.588l-.011.017c-.568.853-1.104 1.659-1.501 2.446c-.398.789-.623 1.494-.623 2.136a1.5 1.5 0 1 0 2.333-1.248a.75.75 0 0 1 .834-1.246A3 3 0 0 1 13 16H3a3 3 0 0 1-3-3c0-1.582.891-3.135 1.777-4.506q.315-.483.623-.946c.473-.709.923-1.386 1.287-2.048H2.51c-.576 0-1.381-.133-1.907-.783A2.68 2.68 0 0 1 0 2.995a3 3 0 0 1 3-3Zm0 1.5a1.5 1.5 0 0 0-1.5 1.5c0 .476.223.834.667 1.132A.75.75 0 0 1 11.75 5.5H5.368c-.467 1.003-1.141 2.015-1.773 2.963c-.192.289-.381.571-.558.845C2.13 10.711 1.5 11.916 1.5 13A1.5 1.5 0 0 0 3 14.5h7.401A3 3 0 0 1 10 13c0-.979.338-1.928.784-2.812c.441-.874 1.023-1.748 1.575-2.576l.017-.026c.568-.853 1.103-1.658 1.501-2.448s.623-1.497.623-2.143c0-.838-.669-1.5-1.5-1.5m-10 0a1.5 1.5 0 0 0-1.5 1.5c0 .321.1.569.27.778c.097.12.325.227.74.227h7.674A2.7 2.7 0 0 1 10 2.995c0-.546.146-1.059.401-1.5Z"/></svg>
    Historial
</a>
@stop
@section('breadcrumb')
@section('breadcrumb')
<ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
    <li class="inline-flex items-center" aria-current="page">
      <div href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 ">
        <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
        </svg>
        <a href="/inicio" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Inicio</a>
      </div>
    </li>
    <li>
      <div class="flex items-center">
        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg>
        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Solicitudes Pendientes</span>
      </div>
    </li>
  </ol>
@stop
@stop
@section('content')
    @livewire('admin.solicitudes.solicitudes-pendientes')
@stop
