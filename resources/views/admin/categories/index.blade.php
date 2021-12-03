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
            <h1 class="text-4xl all-tittles">Listado de categorias <small>Crea nuevo contenido de informacion</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="font-mono container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="px-1 py-1 breadcrumb">
                    @can('admin.categories.create')
                        <li><a class="text-blue-500" href="{{ route('admin.categories.create') }}">Nueva categoria</a></li>
                    @endcan
                    <li class="active">listar Categorias</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="font-serif text-3xl text-center all-tittles">Lista de categorias</h2>
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
                    <th class="div-table-cell">Nombre</th>
                    <th class="div-table-cell">Actualizar</th>
                    <th class="div-table-cell">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)

                    <tr>
                        <td class="div-table-cell">{{ $category->id }}</td>
                        <td class="div-table-cell">{{ $category->name }}</td>
                        <td class="div-table-cell" width="10px">
                            @can('admin.categories.edit')

                                <a class="btn btn-success btn-sm" href="{{ route('admin.categories.edit', $category) }}"><i
                                        class="fas fa-pencil-alt"></i></a>

                            @endcan
                        </td>
                        <td class="div-table-cell" width="10px">

                            @can('admin.categories.destroy')



                                <form action=" {{ route('admin.categories.destroy', $category) }} " method="POST">
                                    {{-- este metodo elimina un registro en nuestra BD --}}
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm" href=""><i
                                            class="fas fa-trash-alt "></i></button>
                                </form>

                            @endcan

                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>



    </div>


@endsection
