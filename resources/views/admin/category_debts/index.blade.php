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
                    {{-- @can('admin.category_debts.create') --}}
                    <li> <a class="text-blue-500" href="{{ route('admin.category_debts.create') }}">Nueva categoria</a>
                    </li>
                    {{-- @endcan --}}
                    <li class="active">listar Categorias</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="font-serif text-3xl text-center all-tittles ">Lista de categorias</h2>
        <div class="container">
            @if (session('eliminar') == 'la categoria se elimino con exito')
                <script>
                    Swal.fire(
                        'Eliminado!',
                        'la categoria se elimino con éxito.',
                        'success'
                    )
                </script>
            @endif
        </div>
        <table class="div-table">
            <thead>
                <tr>
                    <th class="div-table-cell inline-block px-3 h-6 bg-red-700  rounded-full ">Id</th>
                    <th class="div-table-cell">Nombre</th>
                    <th class="div-table-cell">Actualizar</th>
                    <th class="div-table-cell">Borrar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category_debts as $category_debt)

                    <tr>
                        <td class="div-table-cell">{{ $category_debt->id }}</td>
                        <td class="div-table-cell">
                            <h6 class="inline-block px-3 h-6 bg-{{ $category_debt->color }}-600 rounded-full">
                                {{ $category_debt->name }}</h6>
                        </td>
                        <td class="div-table-cell" width="10px">
                            {{-- @can('admin.categories.edit') --}}

                            <a class="btn btn-success btn-sm"
                                href="{{ route('admin.category_debts.edit', $category_debt) }}"><i
                                    class="fas fa-pencil-alt"></i></a>

                            {{-- @endcan --}}
                        </td>
                        <td class="div-table-cell" width="10px">

                            {{-- @can('admin.category_debts.destroy') --}}



                            <div class="form-group text-center">
                                {!! Form::open(['route' => ['admin.category_debts.destroy', $category_debt], 'method' => 'delete', 'onsubmit' => 'return confirm("Esta seguro de borrar el rol?")']) !!} {{-- , 'onsubmit' => 'return confirm("Esta seguro de borrar la imagen?")' --}}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                            </div>

                            {{-- @endcan --}}

                        </td>
                    </tr>

                @endforeach

            </tbody>
        </table>


    </div>

    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Estás seguro?',
                text: "la categoria se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!'
                cancelButtonText: 'Cancelar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })


        });
    </script>



@endsection
