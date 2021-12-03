<x-app-layout>

    <style>
        .imagen {
            background-image: url("{{ asset('img/conjunto2.jpg') }}");
            height: 400px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .imagendos {
            background-image: url("{{ asset('img/conjunto2.jpg') }}");
            height: 100%;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <div class="bg-fixed bg-bottom imagen">
    </div>
    <div class="py-10 text-center bg-yellow-200 border-t-2 border-black ">
        <i class="far fa-calendar-alt fa-3x"></i>
        <h1 class="py-2">Contactanos</h1>
        <h4 class="font-medium">Cuentanos tu opinion, que piensas cambiar en tu conjunto?
        </h4>
        <p class="py-2 font-medium"></p>
    </div>

    <div class="bg-fixed bg-bottom border-t-2 border-yellow-800 imagendos">
        <div class="container pt-8 pb-5 col-md-6">
            @if (session('info'))
                <div class="alert alert-success">
                    <strong>{{ session('info') }}</strong>
                </div>
            @endif
            <div class="contact-form">
                <form action="{{ route('contactanos.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Tu nombre"
                                required="required" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="correo" placeholder="Tu correo"
                                required="required" />
                            @error('correo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="telefono" placeholder="Telefono"
                                required="required" />
                            @error('telefono')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            @error('torre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <select class="custom-select" name="torre">
                                <option selected>Torre</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            @error('apart')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <select class="custom-select" name="apart">
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
                        </div>
                        <div class="form-group col-md-6">
                            @error('asunto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <select class="custom-select" name="asunto">
                                <option selected>Asunto</option>
                                <option value="Sugerencia">Sugerencia</option>
                                <option value="Reportes">Reportes</option>
                                <option value="Pregunta, Queja, etc..">Pregunta, Queja, etc..</option>
                                <option value=" Mi estados de cuenta">Estados de cuenta</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="mensaje" placeholder="Mensaje"
                            required="required"></textarea>
                        @error('mensaje')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="container bg-white">
                        <div>

                            <h3 class="text-center">POLÍTICAS DE PRIVACIDAD Y TRATAMIENTO DE DATOS PERSONALES</h3>
                            <div class="text-center">
                                <input type="checkbox" required="required"><b
                                    class="ml-2 py-2 px-1 text-center text-red-500">He leído y acepto las
                                    POLÍTICAS
                                    DE PRIVACIDAD</b>
                            </div>
                            <br>
                            <h4 class="text-center">tratamientos de uso del conjunto</h4>
                            <div class="">
                                <p class=" m-2 mb-2">Lorem ipsum dolor, sit
                                amet consectetur adipisicing elit.
                                Illum, commodi ab eaque
                                perspiciatis omnis vitae atque error quas consequuntur sed magni itaque placeat,
                                eius
                                tempora fuga officiis beatae alias quibusdam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum odio eum,
                                cupiditate
                                architecto earum expedita atque iusto, porro exercitationem officia neque commodi
                                animi
                                consectetur deleniti. Vero consequatur nemo a ut.
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus dolores
                                enim
                                laborum numquam animi eveniet ipsa cupiditate, labore voluptatibus saepe aliquid
                                accusantium asperiores totam! Porro placeat quis officiis tempora.</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="top-3"><button class="btn btn-primary top-3" type="submit">Enviar
                            mensaje</button></div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
