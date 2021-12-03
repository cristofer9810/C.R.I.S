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
            <h1 class="text-4xl all-tittles">Panel de control de la <small>Galeria</small></h1>
        </div>
    </div>

@endsection

@section('grafica')


    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

    </style>



    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="font-mono title-flat-form title-flat-blue">Agregar nuevos datos</div>

            {{-- para editar cambiamos el {!! Form::open() !!} a {!! Form::model($user, [$options]) !!} y donde dice $user le ponemos la variable padre de nuestro controlador --}}

            {!! Form::model($view, ['route' => ['admin.views.update', $view], 'autocomplete' => 'off', 'files' => true, 'method' => 'put']) !!}

            {{-- mostrar en la el formulario de crear nuevo post para usarlo en el edit y ahorrar codigo --}}
            @include('admin.views.partials.form')

            {!! Form::submit('Actualizar imagen', ['class' => 'btn btn-primary']) !!}
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
    <script>
   

        //cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>

@endsection
