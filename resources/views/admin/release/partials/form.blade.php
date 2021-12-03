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
            {!! Form::text('name', null, ['class' => 'form-control material-control tooltips-general', 'placeholder' => 'Ingrese el nombre del Titulo', 'title' => 'Escribe el nombre del Titulo', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}


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
            {!! Form::label('category_id', 'Categoria') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control material-control tooltips-general px-1 py-1', 'title' => 'se visualizara el nombre de la categoria ', 'data-placement' => 'top', 'data-toggle' => 'tooltip']) !!}
            @error('category_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <p class="px-1 py-1 font-weight-bold">Estado</p>

            <label class="mr-2">
                {!! Form::radio('status', 1, true) !!}
                Borrador
            </label>

            <label class="mr-2">
                {!! Form::radio('status', 2) !!}
                Publicado
            </label>

            <hr>

            @error('status')
                <br>
                <span class="text-danger">{{ $message }}</span>
            @enderror


        </div>

        <div class="mb-3 row">
            <div class="col">

                <div class="image-wrapper">
                    @isset($release->image)

                        <img id="picture" src="{{ Storage::url($release->image->url) }}">
                    @else
                        <img id="picture" src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                    @endisset
                </div>

            </div>

            <div class="col">

                <div class="form-group">
                    {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
                    {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                    @error('file')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <p>Selecione una imagen que se mostrara en las vistas de las Noticias, circulares, Informes ETC...</p>

            </div>
        </div>


        <div class="form-group">
            {!! Form::label('extract', 'Extracto:') !!}
            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

            @error('extract')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>


        <div class="form-group">

            {!! Form::label('body', 'Cuerpo del post:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            @error('body')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>


        <p class="text-center">
            <a href="{{ route('admin.release.index') }}"
                style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
                class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
            <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="fas fa-broom"></i>
                &nbsp;&nbsp; Limpiar</button>
