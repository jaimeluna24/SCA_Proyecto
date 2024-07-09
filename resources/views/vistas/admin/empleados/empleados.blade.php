
@extends('layout.app')
@section('title')
<title>Empleados</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Administración de Empleados</h1>
@stop
@section('button')
<a href="/empleados/registrar" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Registrar</a>
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item active"><a>Empleados</a></div>
@stop
@section('content')
    @livewire('admin.empleados.empleados')
@stop
