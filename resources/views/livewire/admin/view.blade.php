<div>

    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.26%;
            padding-top: 10%;
            padding-left: 25%;

        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 50%;
            height: 50%;
        }

    </style>

    <div class="font-mono container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="px-1 py-1 breadcrumb">
                    <li><a class="text-blue-500" href="{{ route('admin.views.create') }}">Nueva imagen</a>

                    </li>
                    <li class="active">lista de la galeria</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="font-serif text-3xl text-center all-tittles">Lista Galeria</h2>
        <div class="container">
            @if (session('eliminar') == 'la imagen se elimino con exito')
                <script>
                    Swal.fire(
                        'Eliminado!',
                        'la imagen se elimino con éxito.',
                        'success'
                    )
                </script>
            @endif


            <div class="card-header">
                <input wire:model="search" class="form-control"
                    placeholder="Ingrese el nombre de la imagen relacionada"
                    title="Buscara el nombre de la imagen en galeria">
            </div>
            @if ($views->count())


                <table class="div-table">
                    <thead>
                        <tr>
                            <th class="div-table-cell">Id</th>
                            <th class="div-table-cell">Nombre</th>
                            <th class="div-table-cell">Imagen</th>
                            <th class="div-table-cell">Actualizar</th>
                            <th class="div-table-cell">Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($views as $view)

                            <tr>
                                <td class="div-table-cell">{{ $view->id }}</td>
                                <td class="div-table-cell">{{ $view->name }}</td>
                                <td class="div-table-cell">
                                    <div class="image-wrapper flex">
                                        @if ($view->gallery)
                                            <img id="picture" src="{{ Storage::url($view->gallery->url) }}">
                                        @else
                                            <img class="object-cover object-center w-full h-80"
                                                src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                                        @endif

                                    </div>
                                </td>

                                <td class="div-table-cell" width="10px">
                                    @can('admin.views.edit')

                                        <a class="btn btn-success btn-sm text-center " href="{{ route('admin.views.edit', $view) }}"><i
                                                class="fas fa-pencil-alt"></i></a>

                                    @endcan
                                </td>
                                <td class="div-table-cell" width="10px">

                                    @can('admin.views.destroy')


                                        <div class="form-group text-center">
                                            {!! Form::open(['route' => ['admin.views.destroy', $view], 'method' => 'delete', 'class' => 'formulario-eliminar']) !!} {{-- , 'onsubmit' => 'return confirm("Esta seguro de borrar la imagen?")' --}}
                                            {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}
                                        </div>

                                    @endcan

                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>

        </div>

        <div class="card-footer">
            {{ $views->links() }}
        </div>
    </div>

    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'Estás seguro?',
                text: "la imagen se eliminara definitivamente!",
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

@else
    <div class="card-body">
        <strong>No hay ningún registro</strong>
    </div>
    @endif

    @push('js')

    @endpush

</div>
