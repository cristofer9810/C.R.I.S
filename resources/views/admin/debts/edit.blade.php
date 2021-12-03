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
            {!! Form::model($user, ['route' => ['admin.debts.update', $user], 'method' => 'put']) !!}

            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="container pb-5 text-center">

                        @if (session('info'))

                            <div class="alert alert-success">
                                <strong>{{ session('info') }}</strong>
                            </div>


                        @endif

                        <i class="fas fa-money-check fa-4x "></i>
                    </div>
                    <div class="grid grid-cols-1 ">
                        <div class="contact-form">
                            <div class="form-group col-md-6">
                                <p class="form-control">{{ $user->name }}</p>
                                <label>Nombre completo</label>
                            </div>
                            <div class="form-group col-md-6">
                                <p class="form-control">{{ $user->phone }}</p>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
                            </div>
                            <div class="form-group col-md-6">
                                <p class="form-control">{{ $user->email }}</p>
                                <label>Email</label>
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('category_debt_id', 'Tipo de deuda') !!}
                                {!! Form::select('category_debt_id', $category_debts, null, ['class' => 'form-control material-control tooltips-general px-2 py-1', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}

                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group w-full">
                                {!! Form::label('message', 'Descripcion:') !!}
                                {!! Form::textarea('message', null, ['class' => 'form-control w-full']) !!}
                                @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('time1', 'Fecha inicial') !!}
                                {!! Form::date('time1', null, ['class' => 'material-control tooltips-general']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                {!! Form::label('time2', 'Ultima fecha de entrega') !!}
                                {!! Form::date('time2', null, ['class' => 'material-control tooltips-general']) !!}
                            </div>
                            <div class="form-group col-md-6">
                                <p class="px-1 py-1 font-weight-bold">Es deudor?</p>
                                <label class="mr-2">
                                    {!! Form::radio('status', 1, true) !!}
                                    No deudor
                                </label>
                                <label class="mr-2">
                                    {!! Form::radio('status', 2) !!}
                                    Deudor
                                </label>
                                @error('status')
                                    <br>
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <p class="font-weight-bold">Color de la circular</p>
                                @foreach ($users as $user)
                                    <label class="mr-2">
                                        {!! Form::radio('users[]', $user->id, null) !!}
                                        {{ $user->color }}
                                    </label>
                                @endforeach
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('pay', 'Costo de la deuda:') !!}
                                {!! Form::number('pay', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                            </div>
            
                            <div class="form-group col-md-6">
                                {!! Form::label('total', 'Total a pagar con IVA:') !!}
                                {!! Form::number('total', null, ['class' => 'form-control material-control tooltips-general', 'placeholder'=> '0.00' ,'data-placement' => 'top', 'data-toggle' => 'tooltip', 'disabled']) !!}
                            </div>
                        </div>
                    </div>



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
