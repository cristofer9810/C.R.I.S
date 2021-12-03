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
        <div class="form-group bottom-3">

            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'botton-3 form-control material-control tooltips-general', 'placeholder' => 'Ingrese el nombre del rol', 'title' => 'Escribe el nombre del rol', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group ">


            @foreach ($permissions as $permission)
                <div>
                    <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                        {{ $permission->description }}
                    </label>
                </div>
            @endforeach
        </div>



        <p class="text-center">
            <a href="{{ route('admin.roles.index') }}"
                style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>