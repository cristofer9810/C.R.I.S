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
            <h1 class="text-4xl all-tittles">Panel de agregar nuevo <small>Rol</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="font-mono title-flat-form title-flat-blue">Agregar nuevos datos</div>
            {!! Form::open(['route' => 'admin.roles.store']) !!}

            {{-- mostrar en la el formulario de crear nuevo post para usarlo en el edit y ahorrar codigo --}}
            @include('admin.roles.partials.form')


            {!! Form::submit('crear rol', ['class' => 'btn btn-primary']) !!}
            </p>
        </div>
    </div>
    {!! Form::close() !!}
    </div>
    </div>



@endsection
