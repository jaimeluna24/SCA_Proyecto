{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @livewire('admin.dashboard.dashboard')
@stop

@section('css')
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop --}}


@extends('layout.app')
@section('title')
<title>Dashboard</title>
@stop
@role('Administrador')
@section('header')
<h1>Panel General Administración</h1>
@stop
@section('breadcrumb')
<div class="breadcrumb-item active"><a href="/inicio">Dashboard</a></div>
@stop
@section('content')
    @livewire('admin.dashboard.dashboard')
@stop
@endrole
