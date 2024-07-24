@extends('layout.app')
@section('title')
<title>Registrar Usuario</title>
@stop
@section('btn-return')
<button type="button" class="flex focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-3 py-1.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="#ffff" d="M9 15v-4.25L19.625.125L23.8 4.4L13.25 15zm10.6-9.2l1.425-1.4l-1.4-1.4L18.2 4.4zM3 21V3h10.925L7 9.925V17h7.05L21 10.05V21z"/></svg>
    <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
    </svg>
    Registrar
    </button>
@stop
@section('header')
<h1>Registrar Usuario</h1>
@stop

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="/usuarios">Usuarios</a></div>
    <div class="breadcrumb-item">Registrar Usuario</div>
  </div>
@stop

@section('content')
    @livewire('admin.usuarios.registrar')
@stop

@section('css')
<link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('backend/assets/js/page/forms-advanced-forms.js') }}"></script>
@stop
