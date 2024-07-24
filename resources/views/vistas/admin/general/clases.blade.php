@extends('layout.app')
@section('title')
<title>Clases</title>
@stop
@section('btn-return')
<a href="/inicio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
@stop
@section('header')
<h1>Administración de Clases</h1>
@stop
@section('button')
@stop
@section('breadcrumb')
<div class="breadcrumb-item"><a href="/inicio">Dashboard</a></div>
<div class="breadcrumb-item active"><a>Clases</a></div>
@stop
@section('content')
    @livewire('admin.calses.clases')
 @stop

@section('css')

@stop

@section('js')
<script src="{{ asset('backend/assets/js/page/bootstrap-modal.js') }}"></script>
@stop

