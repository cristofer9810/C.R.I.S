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
            <h1 class="text-4xl all-tittles">Panel de control lista de <small>Usuarios del conjunto residencial</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="font-mono container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="px-1 py-1 breadcrumb">
                    <li><a class="text-blue-500" href="{{route('admin.crud_users.create')}}">Crear usuario</a>
                    <li class="active">lista de los usuarios</li>
                </ol>
            </div>
        </div>
    </div>

    @livewire('admin.crud-user')

    @livewireStyles

    

@endsection
