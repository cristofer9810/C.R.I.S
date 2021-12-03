<!DOCTYPE html>
<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="{{ asset('img/Imagen2.png') }}" />
    <link href="/path/to/material-icons/iconfont/material-icons.css" rel="stylesheet">
    <script src="{{ asset('js/admin/sweet-alert.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/sweet-alert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    @livewireStyles


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="{{ asset('css/admin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}">
    @livewire('js')

</head>

<body>
    <!---- aqui es el menu el navbar del sistema  ---->
    @livewire('admin.navbar')
    <!--- aqui es el header del sistema  ---->
    @livewire('admin.header')

    {{-- contenido --}}



    <!--- indicador de saturn save  ---->

    {{-- los ache unos --}}
    @yield('titulo')




    <!--- estos son los contadores de visitas, asistentes,etc...  ---->
    @livewire('admin.contador')



    {{-- los ache dos --}}
    @yield('subtitulo')

    {{-- aqui van a ir los charts --}}
    @yield('grafica')


    <!---  MODAL DEL SISTEMA DE AYUDA aqui tambien copian y pegan donde sea necesario---->


    <!---aqui copiar y pegar el footer-->
    @livewire('admin.footer-admin')

    @livewireScripts

    @stack('modals')

    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="text-center modal-title all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    por favor valla al link para ver el manual del sistema:
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i>
                        &nbsp; De acuerdo</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendor/admin/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    < /body>

        < /html>
