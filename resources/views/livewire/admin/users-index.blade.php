<div>

    <div class="font-mono container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="px-1 py-1 breadcrumb">
                    <li class="active">lista de los usuarios</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2 class="font-serif text-3xl text-center all-tittles">Lista de usuarios</h2>
        <div class="container">
            @if (session('info'))

                <div class="text-center alert alert-success">
                    <strong>{{ session('info') }}</strong>
                </div>


            @endif
        </div>


        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del Usuario"
                title="Buscara el nombre del usuario">
        </div>
        @if ($users->count())

            <table class="div-table">
                <thead>
                    <tr>
                        <th class="div-table-cell">Id</th>
                        <th class="div-table-cell">Nombre</th>
                        <th class="div-table-cell">Email</th>
                        <th class="div-table-cell">Actualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)

                        <tr>
                            <td class="div-table-cell">{{ $user->id }}</td>
                            <td class="div-table-cell">{{ $user->name }}</td>
                            <td class="div-table-cell">{{ $user->email }}</td>
                            <td class="div-table-cell" width="10px">
                                @can('admin.users.edit')
                                <a class="btn btn-success btn-sm"
                                    href="{{ route('admin.users.edit', $user) }}"><i
                                        class="fas fa-pencil-alt"></i></a>
                                @endcan
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
    </div>

    <div class="card-footer">
        {{ $users->links() }}
    </div>

@else
    <div class="card-body">
        <strong>No hay ningún registro</strong>
    </div>
    @endif

</div>
