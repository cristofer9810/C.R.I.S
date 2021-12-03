@extends('layouts.index')


@section('titulo')
    <!-- contenido -->
    <div class="container">
        <div class="page-header">
            <h1 class="text-5xl all-tittles">Panel de control administrador <small>Social</small></h1>
        </div>
    </div>

@endsection

@section('subtitulo')
    <div class="container">
        <div class="page-header">
            <h1 class="text-4xl all-tittles">Listado Comunicacional <small>Crea nuevo contenido de informacion</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    @livewire('admin.release-index')

@endsection
