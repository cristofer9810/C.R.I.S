<div>

    <div class="font-mono container-fluid">
        <div class="row">
            <div class="col-xs-12 lead">
                <ol class="px-1 py-1 breadcrumb">
                    <li><a class="text-blue-500" href="{{ route('admin.debts.create') }}">Asignar deuda</a>
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
        @if ($debts->count())

            <table class="div-table">
                <thead>
                    <tr>
                        <th class="div-table-cell">Id</th>
                        <th class="div-table-cell">Nombre</th>
                        <th class="div-table-cell">Email</th>
                        <th class="div-table-cell">Estado</th>
                        <th class="div-table-cell py-1 px-1">Asignar deuda</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($debts as $debt)

                        <tr>
                            <td class="div-table-cell">{{ $debt->id }}</td>
                            <td class="div-table-cell">{{ $debt->name }}</td>
                            <td class="div-table-cell">{{ $debt->email }}</td>
                            <td class="div-table-cell">
                                <h6 class="inline-block px-3 h-6 bg-{{ $debt->color }}-500 rounded-full">
                                    {{ $debt->status }}</h6>
                            </td>
                            <td class="div-table-cell" width="10px">
                                @can('admin.users.edit')
                                    <a class="btn btn-success btn-sm" href="{{ route('admin.debts.edit', $debt->id) }}"><i
                                            class="fas fa-money-check-alt"></i>
                                    @endcan
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
    </div>

    <div class="card-footer">
        {{ $debts->links() }}
    </div>

@else
    <div class="card-body">
        <strong>No hay ningún registro</strong>
    </div>
    @endif

</div>
