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
            <h1 class="text-4xl all-tittles">Panel de Roles y <small>Permisos</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

<div class="font-mono container-fluid">
    <div class="row">
        <div class="col-xs-12 lead">
            <ol class="px-1 py-1 breadcrumb">
                {{-- @can('admin.roles.create') --}}
                    <li><a class="text-blue-500" href="{{ route('admin.roles.create') }}">Nuevo Rol</a></li>
                {{-- @endcan --}}
                <li class="active">listar Roles</li>
            </ol>
        </div>
    </div>
</div>

<div class="container-fluid">
    <h2 class="font-serif text-3xl text-center all-tittles">Lista de Roles</h2>
    <div class="container">
        @if (session('info'))

            <div class="alert alert-success">
                <strong>{{ session('info') }}</strong>
            </div>


        @endif
    </div>
    <table class="div-table">
        <thead>
            <tr>
                <th class="div-table-cell">Id</th>
                <th class="div-table-cell">Roles</th>
                <th class="div-table-cell">Actualizar</th>
             
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)

                <tr>
                    <td class="div-table-cell">{{ $role->id }}</td>
                    <td class="div-table-cell">{{ $role->name }}</td>
                    <td class="div-table-cell" width="10px">
                        {{-- @can('admin.roles.edit') --}}

                            <a class="btn btn-success btn-sm" href="{{ route('admin.roles.edit', $role) }}"><i
                                    class="fas fa-pencil-alt"></i></a>

                        {{-- @endcan --}}
                    </td>
                   
                </tr>

            @endforeach

        </tbody>
    </table>



</div>

@endsection
