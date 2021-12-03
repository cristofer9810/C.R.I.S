<x-app-layout>

    <style>
        .imagen {
            background-image: url("{{ asset('img/ciclo.jpg') }}");
            height: 400px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .imagendos {
            background-image: url("{{ asset('img/ciclo.jpg') }}");
            height: 100%;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <div class="bg-fixed bg-bottom imagen">
    </div>
    <div class="py-10 text-center bg-yellow-200 border-t-2 border-black ">
        <i class="fas fa-car fa-3x"></i>
        <h1 class="py-2">Ciclo del parqueadero</h1>
        <h4 class="font-medium">Informacíon acerca de:<b> el ciclo del parquedero</b>  
            en actualizacion por orden del comite administrativo 
        </h4>
        <p class="py-2 font-medium"></p>
    </div>

    <div class="bg-fixed bg-bottom border-t-2 border-yellow-800 imagendos">
        <div class="container pt-8 pb-5 col-md-6">
            <div class="container bg-white">
                <embed src="{{ asset('pdf/ciclo.pdf') }}" width="100%" height="1500px" />
                <br>
                <div>
                    <h3 class="text-center">POLÍTICAS DE PRIVACIDAD Y TRATAMIENTO DE DATOS PERSONALES</h3>
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
        </div>
    </div>

</x-app-layout>
