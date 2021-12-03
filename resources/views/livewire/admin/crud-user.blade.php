<div>
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
        @if ($crud_users->count())

            <table class="div-table">
                <thead>
                    <tr>
                        <th class="div-table-cell">Id</th>
                        <th class="div-table-cell">Nombre</th>
                        <th class="div-table-cell">Email</th>
                        <th class="div-table-cell">Actualizar</th>
                        <th class="div-table-cell">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crud_users as $crud_user)

                        <tr>
                            <td class="div-table-cell">{{ $crud_user->id }}</td>
                            <td class="div-table-cell">{{ $crud_user->name }}</td>
                            <td class="div-table-cell">{{ $crud_user->email }}</td>
                            <td class="div-table-cell" width="10px">
                                @can('admin.users.edit')
                                    <a class="btn btn-success btn-sm"
                                        href="{{ route('admin.crud_users.edit', $crud_user->id) }}"><i
                                            class="fas fa-pencil-alt"></i></a>
                                @endcan
                            </td>
                            <td class="div-table-cell" width="10px">
                                {!! Form::open(['route' => ['admin.crud_users.destroy', $crud_user->id], 'method' => 'delete', 'class' => 'formulario-eliminar']) !!} {{-- , 'onsubmit' => 'return confirm("Esta seguro de borrar la imagen?")' --}}
                                {!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>
    </div>

    <div class="card-footer">
        {{ $crud_users->links() }}
    </div>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Deseas borrarlo?',
                text: "Realmente deseas borrar a este usuario! sí lo hace no podra recuperar la informacion",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, Borrar usuario!',
                cancelButtonText: 'No, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                    swalWithBootstrapButtons.fire(
                        'Eliminado!',
                        'Este usuario a sido eliminado.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Ufff eso estuvo cerca :)',
                        'error'
                    )
                }
            })
        });
    </script>

@else
    <div class="card-body">
        <strong>No hay ningún registro</strong>
    </div>
    @endif
</div>
