
@extends('layout.app')
@section('title')
<title>Historial de solicitudes</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Historial de solicitudes</h1>
@stop
@section('button')
{{-- <a href="/solicitudes/crear" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Crear nueva</a> --}}
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item" href="/solicitudes-pendientes"><a>Solicitudes</a></div>
<div class="breadcrumb-item active"><a>Historial</a></div>

@stop
@section('content')
    @livewire('admin.solicitudes.historial')
@stop
