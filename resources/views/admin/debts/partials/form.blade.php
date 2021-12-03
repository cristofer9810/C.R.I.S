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
                    {!! Form::text('name', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip', 'readonly']) !!}
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('phone', 'Telefono') !!}
                    {!! Form::text('phone', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip', 'readonly']) !!}
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class' => 'form-control material-control tooltips-general', 'data-placement' => 'top', 'data-toggle' => 'tooltip', 'readonly']) !!}
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
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
