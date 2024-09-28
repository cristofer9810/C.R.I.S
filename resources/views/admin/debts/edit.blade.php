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
            {!! Form::model($debt, ['route' => ['admin.debts.update', $debt], 'autocomplete' => 'off' ,'method' => 'put']) !!}


            @include('admin.debts.partials.form')


            {!! Form::submit('Asignar deuda', ['class' => 'btn btn-primary']) !!}
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
