
@extends('layout.app')
@section('title')
<title>Docentes</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Administración de Docentes</h1>
@stop
@section('button')
<a href="/docentes/registrar" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i>Registrar</a>
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item active"><a>Docentes</a></div>
@stop
@section('content')
    @livewire('admin.docentes.docentes')
@stop
