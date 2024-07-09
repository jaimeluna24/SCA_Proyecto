
@extends('layout.app')
@section('title')
<title>Mis solicitudes</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Mis Solicitudes</h1>
@stop
@section('button')
<a href="/solicitudes/crear" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Crear nueva</a>
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item active"><a>Mis Solicitudes</a></div>
@stop
@section('content')
    @livewire('docente.solicitudes.solicitudes')
@stop
