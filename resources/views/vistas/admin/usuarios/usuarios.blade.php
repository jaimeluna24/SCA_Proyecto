{{-- @extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Administración de usuarios</h1>
@stop

@section('content')
    @livewire('admin.usuarios.usuarios')
@stop

@section('css')
@vite('resources/css/app.css')
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop --}}


@extends('layout.app')
@section('title')
<title>Usuarios</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Administración de Usuarios</h1>
@stop
@section('button')
<a href="/usuarios/registrar" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Registrar</a>
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item active"><a>Usuarios</a></div>
@stop
@section('content')
    @livewire('admin.usuarios.usuarios')
@stop
