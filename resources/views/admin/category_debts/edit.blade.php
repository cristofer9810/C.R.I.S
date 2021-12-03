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
            <h1 class="text-4xl all-tittles">Crear nueva categorias <small>Crea nuevo contenido de informacion</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="font-mono title-flat-form title-flat-blue">Agregar nuevos datos</div>
            {!! Form::model($category_debt, ['route' => ['admin.category_debts.update', $category_debt], 'method' => 'put']) !!}
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
                    <div class="form-group">

                        {!! Form::label('name', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control material-control tooltips-general', 'placeholder' => 'Ingrese el nombre de la categoría', 'title' => 'Escribe el nombre de la categoria', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">

                        {!! Form::label('slug', 'Slug') !!}
                        {!! Form::text('slug', null, ['class' => 'form-control material-control tooltips-general', 'title' => 'se visualizara el nombre de la categoria ejemplo: hola-como-estas', 'data-placement' => 'top', 'data-toggle' => 'tooltip', 'readonly']) !!}

                        @error('slug')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">                  

                        {!! Form::label('color', 'Color:') !!}
                        {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}

                    </div>

                    <p class="text-center">
                        <br>
                        <a href="{{ route('admin.category_debts.index') }}"
                            style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                            class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i
                                class="fas fa-broom"></i>
                            &nbsp;&nbsp; Limpiar</button>
                        {!! Form::submit('Actualizar categoria', ['class' => 'btn btn-primary']) !!}
                    </p>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>


@endsection