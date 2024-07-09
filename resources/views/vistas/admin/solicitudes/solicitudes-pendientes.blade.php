
@extends('layout.app')
@section('title')
<title>Solicitudes Pendientes</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Solicitudes Pendientes</h1>
@stop
@section('button')
<a href="/solicitudes/historial" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Ver historial</a>
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item active"><a>Solicitudes Pendientes</a></div>
@stop
@section('content')
    @livewire('admin.solicitudes.solicitudes-pendientes')
@stop
