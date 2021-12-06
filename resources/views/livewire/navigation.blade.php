<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<nav class="bg-black opacity-95" x-data="{ open: false }">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
                    crossorigin="anonymous">
                <!-- Mobile menu button-->
                <button x-on:click="open = true" type="button"
                    class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
              Icon when menu is closed.
  
              Heroicon name: outline/menu
  
              Menu open: "hidden", Menu closed: "block"
            -->
                    <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
              Icon when menu is open.
  
              Heroicon name: outline/x
  
              Menu open: "block", Menu closed: "hidden"
            -->
                    <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">

                {{-- logotipo --}}
                <a href="/" class="flex items-center flex-shrink-0 sm:block sm:ml-6">
                    <img class="block w-auto h-8 lg:hidden" src="{{ asset('img/Imagen4.png') }}" alt="C.R.I.S">
                    <img class="hidden w-auto h-8 lg:block" src="{{ asset('img/Imagen2.png') }}" alt="C.R.I.S">
                </a>

                {{-- menu lg --}}
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <div class="hidden dropdown sm:block sm:ml-6">
                            <a class="text-center text-white no-underline bg-black btn btn-dark dropdown-toggle hover:no-underline "
                                href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Comunicados
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                @foreach ($categories as $category)

                                    <li><a class="dropdown-item "
                                            href="{{ route('inicio.category', $category) }}">{{ $category->name }}</a>
                                    </li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                        <a href="{{ route('inicio.reservar') }}"
                            class="w-full h-full px-3 py-2 text-sm font-medium text-white no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Reservar</a>
                    </div>
                </div>

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                        <a href="{{ route('inicio.pagos') }}"
                            class="px-3 py-2 text-sm font-medium text-white no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Pagos</a>
                    </div>
                </div>


                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                        <a href="{{ route('inicio.galeria') }}"
                            class="px-3 py-2 text-sm font-medium text-white no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Galeria</a>
                    </div>
                </div>

                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">

                        <a href="{{ route('inicio.contactanos') }}"
                            class="px-3 py-2 text-sm font-medium text-white no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Contacto</a>
                    </div>
                </div>

                <div class="hidden px-3 btn-group sm:block sm:ml-6">
                    <button class="text-white bg-black btn btn-secondary btn-sm" type="button">
                        Conoce tu conjunto
                    </button>
                    <button type="button"
                        class="text-white bg-black btn btn-sm btn-dark dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Conoce más</span>
                    </button>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('conocer.ciclo') }}">Ciclo de parqueadero</a></li>
                        <li><a class="dropdown-item" href="{{ route('conocer.licitacion') }}">Licitaciones</a></li>
                        <li><a class="dropdown-item" href="{{ route('conocer.manualC') }}">Manual del Conjunto R.</a></li>
                        <li><a class="dropdown-item" href="{{ route('conocer.manualB') }}">Manual de Bioseguridad</a></li>
                        <li><a class="dropdown-item" href="{{ route('conocer.lineas') }}">Líneas de emergencia</a></li>
                    </ul>
                </div>
            </div>
            @auth


                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                    <!-- Profile dropdown -->
                    <div class="relative ml-3" x-data="{ open: false }">
                        <div>
                            <button x-on:click="open = true" type="button"
                                class="flex text-sm bg-black rounded-full opacity-95 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>

                                {{-- aqui esta para ingresar la imagen de perfil de nuestro sistema en la BD --}}
                                <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                            </button>
                        </div>

                        <!--
                                                                                                                                                                                                                                      Dropdown menu, show/hide based on menu state.
                                                                                                                                                                                                                          
                                                                                                                                                                                                                                      Entering: "transition ease-out duration-100"
                                                                                                                                                                                                                                        From: "transform opacity-0 scale-95"
                                                                                                                                                                                                                                        To: "transform opacity-100 scale-100"
                                                                                                                                                                                                                                      Leaving: "transition ease-in duration-75"
                                                                                                                                                                                                                                        From: "transform opacity-100 scale-100"
                                                                                                                                                                                                                                        To: "transform opacity-0 scale-95"
                                                                                                                                                                                                                                    -->
                        <div x-show="open" x-on:click.away="open = false"
                            class="absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil</a>
                            

                            @can('admin.home')
                                <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>
                            @endcan

                            {{-- esto hace que podamos cerrar session con la en archivo = route('logout') que esta no se donde, esto lo podemos 
                        coger desde el archivo navigation-menu.blade --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault();
                                                                                                                                                                                                                                      this.closest('form').submit();">Cerrar
                                    sesión</a>
                            </form>

                        </div>
                    </div>
                </div>
            @else
                <div>
                    {{-- en este apartado esta la configuracion de botones para ingresar y registrarse en el sistema --}}

                    <a href="{{ route('login') }}"
                        class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-yellow-500 hover:text-white">Login</a>


                    <a href="{{ route('register') }}"
                        class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-yellow-500 hover:text-white">Register</a>
                </div>

            @endauth
        </div>
    </div>



    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" x-show="open" x-on:click.away="open = false" id="mobile-menu">

        <div class="sm:hidden" x-show="open" x-on:click.away="open = false" id="mobile-menu">
            <a class="text-center text-white no-underline bg-black btn btn-dark dropdown-toggle hover:no-underline "
                href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                Comunicados
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @foreach ($categories as $category)

                    <div class="px-2 pt-2 pb-3 space-y-1">
                        <li><a class="block px-3 py-2 text-base font-medium text-gray-300 no-underline rounded-md dropdown-item hover:bg-yellow-500 hover:text-white hover:no-underline "
                                href="{{ route('inicio.category', $category) }}">{{ $category->name }}</a>
                        </li>

                    </div>
                @endforeach
            </ul>
        </div>


        <div class="px-2 pt-2 pb-3 space-y-1">
            {{-- esto hace que en la base de datos se imprima las tablas o modulos de nuestro sistema --}}


            <a href="{{ route('inicio.reservar') }}"
                class="block px-3 py-2 text-base font-medium text-gray-300 no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Reserva</a>

        </div>

        <div class="px-2 pt-2 pb-3 space-y-1">
            {{-- esto hace que en la base de datos se imprima las tablas o modulos de nuestro sistema --}}


            <a href="{{ route('inicio.pagos') }}"
                class="block px-3 py-2 text-base font-medium text-gray-300 no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Pagos</a>

        </div>

        <div class="px-2 pt-2 pb-3 space-y-1">
            {{-- esto hace que en la base de datos se imprima las tablas o modulos de nuestro sistema --}}


            <a href="{{ route('inicio.galeria') }}"
                class="block px-3 py-2 text-base font-medium text-gray-300 no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Galeria</a>

        </div>

        <div class="px-2 pt-2 pb-3 space-y-1">
            {{-- esto hace que en la base de datos se imprima las tablas o modulos de nuestro sistema --}}


            <a href="{{ route('inicio.contactanos') }}"
                class="block px-3 py-2 text-base font-medium text-gray-300 no-underline rounded-md hover:bg-yellow-500 hover:text-white hover:no-underline">Contacto</a>

        </div>    
    </div>

    <script>
        $(document).ready(function() {
            $('.dropdown-submenu a.test').on("click", function(e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>

</nav>
