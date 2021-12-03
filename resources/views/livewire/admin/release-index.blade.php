<div>
    <div class="font-mono container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="px-1 py-1 breadcrumb">
                    @can('admin.release.create')

                        <li><a class="text-blue-500" href="{{ route('admin.release.create') }}">Crear comunicado</a>
                        @endcan
                    </li>
                    <li class="active">lista Comunicacional</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="font-serif text-3xl text-center all-tittles">Lista Comunicacional</h2>
        <div class="container">
            @if (session('info'))

                <div class="text-center alert alert-success">
                    <strong>{{ session('info') }}</strong>
                </div>


            @endif
        </div>


        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del comunicado"
                title="Buscara el nombre del comunicado">
        </div>
        @if ($releases->count())

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
                    @foreach ($releases as $release)

                        <tr>
                            <td class="div-table-cell">{{ $release->id }}</td>
                            <td class="div-table-cell">{{ $release->name }}</td>
                            <td class="div-table-cell" width="10px">
                                @can('admin.release.edit')

                                    <a class="btn btn-success btn-sm"
                                        href="{{ route('admin.release.edit', $release) }}"><i
                                            class="fas fa-pencil-alt"></i></a>

                                @endcan
                            </td>
                            <td class="div-table-cell" width="10px">

                                @can('admin.release.destroy')



                                    {!! Form::open(['route' => ['admin.release.destroy', $release], 'method' => 'delete', 'onsubmit' => 'return confirm("Esta seguro de borrar el post?")']) !!}
                                    {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endcan

                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
    </div>

    <div class="card-footer">
        {{ $releases->links() }}
    </div>

@else
    <div class="card-body">
        <strong>No hay ningún registro</strong>
    </div>
    @endif

    @push('js')

    @endpush




</div>
