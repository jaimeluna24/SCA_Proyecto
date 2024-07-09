@extends('layout.app')
@section('title')
<title>Crear Solicitud</title>
@stop
@section('btn-return')
<a href="/empleados" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Crear Solicitud</h1>
@stop

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="/usuarios">Solicitudes</a></div>
    <div class="breadcrumb-item">Crear Solicitud</div>
  </div>
@stop

@section('content')
    @livewire('docente.solicitudes.crear')
@stop

@section('css')
<link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
@stop

@section('js')
{{-- <script src="{{ asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script> --}}

<script src="{{ asset('backend/assets/js/page/forms-advanced-forms.js') }}"></script>
@stop
