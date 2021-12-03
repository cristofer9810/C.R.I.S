<div>
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
                        <input type="text" disabled name="nombre" class="material-control tooltips-general" required=""
                            maxlength="70" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,70}" data-toggle="tooltip"
                            data-placement="top" title="Escribe el nombre del administrador">
                        <label>Nombre completo</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" disabled name="telefono" class="material-control tooltips-general"
                            pattern="[0-9]{8,8}" required="" maxlength="8" data-toggle="tooltip" data-placement="top"
                            title="Solamente 8 números">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Teléfono</label>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="email" disabled name="correo" class="material-control tooltips-general"
                            maxlength="50" data-toggle="tooltip" data-placement="top"
                            title="Escribe el Email de la persona acargo de la reunion ">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email</label>
                    </div>
                    <div class="form-group col-md-6">
                        <select class="custom-select material-control tooltips-general">
                            <option selected>Tipo de deuda</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span class="highlight"></span>
                        <span class="bar"></span>

                    </div>
                    <div class="form-group col-md-6 w-full">
                        <label>Descripcion</label>
                        <textarea type="text" name="body" id="body"
                            class="material-control tooltips-general  input-check-user"
                            placeholder="Escribe una descripcion" required="" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ]{1,20}"
                            data-toggle="tooltip" data-placement="top"
                            title="Escribe la descripcion del horario"></textarea>
                        <span class="highlight"></span>
                        <span class="bar"></span>

                    </div>

                    <div class="form-group col-md-6">
                        <label>Fecha inicial</label>
                        <input class="material-control tooltips-general" type="date" name="fecha1">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Ultima fecha de entrega</label>
                        <input class="material-control tooltips-general" type="date" name="fecha2">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Estado</label>
                        <input type="radio">No deudor
                        <input type="radio">Deudor
                        <span class="highlight"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
