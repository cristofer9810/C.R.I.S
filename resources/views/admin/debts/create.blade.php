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
            <h1 class="text-4xl all-tittles">Panel de control <small>Usuarios deudores y no deudores</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="font-mono title-flat-form title-flat-blue">Asignar una deuda</div>
            {!! Form::open(['route' => 'admin.debts.store']) !!}


            @include('admin.debts.partials.form')

            <br>
            <p class="text-center">
                <a href="{{ route('admin.release.index') }}"
                    style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                    class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="fas fa-broom"></i>
                    &nbsp;&nbsp; Limpiar</button>


                {!! Form::submit('Archivar deuda', ['class' => 'btn btn-primary']) !!}
            </p>

        </div>
    </div>

    {!! Form::close() !!}

    </div>

    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#message'))
            .catch(error => {
                console.error(error);
            });

            $(document).ready(function() {
            $("#pay").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#total',
                space: '-'
            });
        });
    </script>


@endsection
