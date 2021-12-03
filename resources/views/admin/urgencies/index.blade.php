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
            <h1 class="text-4xl all-tittles">Panel de control envio de <small>correos a los usaurios deudores</small></h1>
        </div>
    </div>

@endsection

@section('grafica')

    <div class="container-fluid">
        <div class="container-flat-form">
            <div class="font-mono title-flat-form title-flat-blue">Agregar datos de estado de cuenta</div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="container pb-5 text-center">

                        @if (session('info'))

                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>


                        @endif

                        <i class="fas fa-hand-holding-usd fa-4x"></i>
                    </div>
                    <div class="grid grid-cols-1 ">
                        <div class="contact-form">
                            <form action="{{ route('admin.urgencies.store') }}" method="POST">
                                @csrf
                                <div class="form-group col-md-6">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="text" name="name" class="material-control tooltips-general" required=""
                                        maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip"
                                        data-placement="top" title="Tu nombre completo">
                                    <label>Nombre completo</label>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="email" name="email" class="material-control tooltips-general" required=""
                                        data-toggle="tooltip" data-placement="top" title="tu correo con @ y .com">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('telefono')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="text" name="telefono" class="material-control tooltips-general"
                                        pattern="[0-9]{8,8}" required="" maxlength="10" data-toggle="tooltip"
                                        data-placement="top" title="Solamente 10 números">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                    <label>Teléfono o Celular</label>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('direccion')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <input type="text" name="direccion" class="material-control tooltips-general"
                                        required="" maxlength="70" data-toggle="tooltip" data-placement="top"
                                        title="Escribe la direccion de tu residencia">
                                    <label>Direccion</label>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('torre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <select class="custom-select material-control tooltips-general" name="torre">
                                        <option selected>Torre</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('apart')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <select class="custom-select material-control tooltips-general" name="apart">
                                        <option selected>Apartamento</option>
                                        <option value="101">101</option>
                                        <option value="202">102</option>
                                        <option value="103">103</option>
                                        <option value="104">104</option>
                                        <option value="201">201</option>
                                        <option value="202">202</option>
                                        <option value="203">203</option>
                                        <option value="204">204</option>
                                        <option value="301">301</option>
                                        <option value="302">302</option>
                                        <option value="303">303</option>
                                        <option value="304">304</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('fecha1')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label>Fecha inicial</label>
                                    <input class="material-control tooltips-general" type="date" name="fecha1">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('fecha2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label>Ultima fecha de entrega</label>
                                    <input class="material-control tooltips-general" type="date" name="fecha2">
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <select class="custom-select material-control tooltips-general" name="status">
                                        <option selected>Estado</option>
                                        <option value="deudor">Deudor</option>
                                        <option value="no_deudor">No deudor</option>
                                    </select>
                                    <span class="highlight"></span>
                                    <span class="bar"></span>
                                </div>
                        </div>
                    </div>
                    <div class="w-full py-4">
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <textarea class="w-full" type="text" name="message" id="message"
                            placeholder="Descripcion"></textarea>
                    </div>

                    <p class="text-center">
                        <a href="{{ route('admin.urgencies.index') }}"
                            style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                            class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
                        <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i
                                class="fas fa-broom"></i>
                            &nbsp;&nbsp; Limpiar</button>
                        <button class="btn btn-primary top-3" type="submit">Enviar
                            mensaje</button>
                </div>
                </form>
            </div>
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
