@extends('layout.app')
@section('title')
<title>Registrar Docente</title>
@stop
@section('btn-return')
<a href="/docentes" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Registrar Docente</h1>
@stop

@section('breadcrumb')
<div class="section-header-breadcrumb">
    <div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="/docentes">Docentes</a></div>
    <div class="breadcrumb-item">Registrar Docentes</div>
  </div>
@stop

@section('content')
    @livewire('admin.docentes.registrar')
@stop

@section('css')
<link href="//rawgithub.com/indrimuska/jquery-editable-select/master/dist/jquery-editable-select.min.css" rel="stylesheet">
@stop

@section('js')
<script src="{{ asset('backend/assets/js/page/forms-advanced-forms.js') }}"></script>
@stop
