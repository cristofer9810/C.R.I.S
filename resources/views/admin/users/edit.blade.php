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
            <h1 class="text-4xl all-tittles">Panel de control grafica <small>Inicio</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="font-mono title-flat-form title-flat-blue">Editar usuario</div>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="container pb-5 text-center">
                        @if (session('info'))

                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>


                        @endif

                        <i class="far fa-edit fa-4x "></i>
                    </div>
                    <div class="card-body">
                        <p class="h5">Nombre:</p>
                        <p class="form-control">{{ $user->name }}</p>
                    </div>
                    <h2 class="h5 top-2">Listado de roles</h2>
                    <div class="card-body">

                        @foreach ($roles as $role)
                            <div>
                                <label>
                                    {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                    {{ $role->name }}
                                </label>
                            </div>
                        @endforeach

                    </div>

                    <p class="text-center">
                        <a href="{{ route('admin.users.index') }}"
                            style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                            class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
                        {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary']) !!}
                    </p>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
