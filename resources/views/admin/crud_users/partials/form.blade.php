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
                    {!! Form::label('name', 'Nombre') !!}
                    {!! Form::text('name', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="form-group col-md-6">
                    {!! Form::label('telephone', 'Telefono') !!}
                    {!! Form::number('telephone', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                    @error('telephone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('address', 'direccion') !!}
                    {!! Form::text('address', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('cargo', 'Cargo:') !!}
                    {!! Form::select('cargo', $cargos, null, ['class' => 'form-control material-control tooltips-general py-1', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('password', 'Contraseña') !!}
                    {!! Form::password('password', ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
                    {!! Form::label('color', 'Color:') !!}
                    {!! Form::select('color', $colors, null, ['class' => 'form-control material-control tooltips-general py-1', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
                </div>
                
            </div>
        </div>

        <br>
        <p class="text-center">
            <a href="{{ route('admin.crud_users.index') }}"
                style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
            <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i
                    class="fas fa-broom"></i>
                &nbsp;&nbsp; Limpiar</button>