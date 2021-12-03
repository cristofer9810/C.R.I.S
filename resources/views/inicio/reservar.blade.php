<x-app-layout>

    <link href='../lib/main.css' rel='stylesheet' />
    <script src='https://github.com/mozilla-comm/ical.js/releases/download/v1.4.0/ical.js'></script>
    <script src='../lib/main.js'></script>
    <script src='../packages/icalendar/main.global.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                displayEventTime: false,
                initialDate: new Date(),
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },

                events: {
                    url: 'ics/feed.ics',
                    format: 'ics',
                    failure: function() {
                        document.getElementById('script-warning').style.display = 'block';
                    }
                },
                loading: function(bool) {
                    document.getElementById('loading').style.display =
                        bool ? 'block' : 'none';
                }
            });
            calendar.setOption('locale', 'Es');

            calendar.render();
        });
    </script>


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

        #script-warning {
            display: none;
            background: #eee;
            border-bottom: 1px solid #ddd;
            padding: 0 10px;
            line-height: 40px;
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            color: red;
        }

        #loading {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
        }

        #calendar {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 10px;
        }

    </style>

    <div class="bg-fixed bg-bottom imagen">
    </div>
    <div class="py-10 text-center bg-yellow-200 border-t-2 border-black ">
        <i class="fas fa-mail-bulk fa-3x"></i>
        <h1 class="py-2">Reservas</h1>
        <h4 class="font-medium">Reserva tu espacio en el conjunto residencial, se enviara una solicitud al
            administrador
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
                <form action="{{ route('reservar.store') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Nombre y apellido"
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
                                <option selected>Uso de area comunitaria?</option>
                                <option value="Salon BBQ">Salon BBQ</option>
                                <option value="Salon comunal">Salon comunal</option>
                                <option value="Gimnasio">Gimnasio</option>
                                <option value="Piscina">Piscina</option>
                                <option value="Otro">Otro(escribir en la describcion)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="6" name="mensaje" placeholder="Información adicional"
                            required="required"></textarea>
                        @error('mensaje')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="bg-white rounded font-bold pl-3 py-2 pr-4">desde:</label>
                            <input type="date" class="form-control" name="date1" placeholder="date"
                                required="required" />
                            @error('date1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group col-md-6">
                            <label class="bg-white rounded font-bold pl-3 py-2 pr-4">hora:</label>
                            <input type="time" class="form-control" name="time1" placeholder="time1"
                                required="required" />
                            @error('time1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="bg-white rounded font-bold pl-3 py-2 pr-4">Hasta:</label>
                            <input type="date" class="form-control" name="date2" placeholder="date"
                                required="required" />
                            @error('date2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="bg-white rounded font-bold pl-3 py-2 pr-4">hora:</label>
                            <input type="time" class="form-control" name="time2" placeholder="time1"
                                required="required" />
                            @error('time2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
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
    </div>

    <div class="py-10 text-center bg-yellow-200 border-t-2 border-black ">
        <i class="fas fa-mail-bulk fa-3x"></i>
        <h1 class="py-2">Reservas</h1>
        <h4 class="font-medium">Reserva tu espacio, directamente aqui y escoje la opcion más favorable
        </h4>
        <p class="py-2 font-medium"></p>
    </div>

    <div class="container border-t-2 border-black">
        <div id='script-warning'>
            <code>ics/feed.ics</code> must be servable
        </div>

        <div id='loading'>loading...</div>

        <div id='calendar'></div>
    </div>

    <div class="py-10 text-center bg-yellow-200 border-t-2 border-black ">
        <div class="grid grid-cols-3 gap-0">
            <div>
                <i class="fab fa-whatsapp fa-3x"></i>
                <h1 class="py-2">WhatsApp</h1>
                <h5 class="font-medium">+57 314 265 9038
                </h5>
            </div>
            <div>
                <i class="fab fa-facebook-f fa-3x"></i>
                <h1 class="py-2">Facebook</h1>
                <h5 class="font-medium">Conjunto.C.R.I.S
                </h5>
            </div>
            <div>
                <i class="fas fa-phone-volume fa-3x"></i>
                <h1 class="py-2">Contacto</h1>
                <h5 class="font-medium">(601) 602 6421
                </h5>
            </div>
        </div>
    </div>

    {{-- modal del boton --}}
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="fixed z-10 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true"
        id="alerta">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">



            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>



            <div
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div
                            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                Deactivate account
                            </h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500">
                                    Are you sure you want to deactivate your account? All of your data will be
                                    permanently removed. This action cannot be undone.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Deactivate
                    </button>
                    <button type="button"
                        class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
