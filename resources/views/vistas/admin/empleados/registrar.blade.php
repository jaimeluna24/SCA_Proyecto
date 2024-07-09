@extends('layout.app')
@section('title')
<title>Registrar Empleado</title>
@stop
@section('btn-return')
<a href="/empleados" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Registrar Empleado</h1>
@stop

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="/usuarios">Empleados</a></div>
    <div class="breadcrumb-item">Registrar Empleado</div>
  </div>
@stop

@section('content')
    @livewire('admin.empleados.registrar')
@stop

@section('css')
<link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
@stop

@section('js')
{{-- <script src="{{ asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script> --}}

<script src="{{ asset('backend/assets/js/page/forms-advanced-forms.js') }}"></script>
@stop
