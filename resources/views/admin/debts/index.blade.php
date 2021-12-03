@extends('layouts.index')


@section('titulo')
    <!-- contenido -->
    <div class="container">
        <div class="page-header">
            <h1 class="text-5xl all-tittles">Panel de control administrador <small>Inicio</small></h1>
        </div>
    </div>

@endsection

@section('subtitulo')
    <div class="container">
        <div class="page-header">
            <h1 class="text-4xl all-tittles">Panel de control lista de <small>Usuarios deudores y no deudores</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    @livewire('admin.debt-users')

@endsection
