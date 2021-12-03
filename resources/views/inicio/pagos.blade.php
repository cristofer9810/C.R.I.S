<x-app-layout>

    <?php
    // SDK de Mercado Pago
    require base_path('vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
    
    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();
    
    // Crea un ítem en la preferencia
    $item = new MercadoPago\Item();
    $item->title = 'Mi producto';
    $item->quantity = 1;
    $item->unit_price = 75;
    $preference->items = [$item];
    $preference->save();
    ?>

    <style>
        .imagen {
            background-image: url("{{ asset('img/conjunto2.jpg') }}");
            height: 300px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
    <div class="bg-fixed bg-bottom imagen mb-7">
    </div>

    <div class="container py-10 text-center border-t-2 border-black">
        <i class="fas fa-money-check-alt fa-3x"></i>
        <h1 class="py-2">Pagos de cuenta</h1>
        <h4 class="font-medium">Realiza pagos de forma segura y en pocos minutos
        </h4>
        <p class="py-2 font-medium">siga los pasos para conozer su estado de cuenta y el total a pagar</p>
        <img src="img/conjunto.jpg">
        <br>
        <div class="cho-container">

        </div>
    </div>

    {{-- aqui se remplazara la imagen y se pondra la pasarela de pagos --}}


    <script src="https://sdk.mercadopago.com/js/v2"></script>


    <script>
        // Agrega credenciales de SDK
        const mp = new MercadoPago("{{ config('services.mercadopago.key') }}", {
            locale: 'es-AR'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                label: 'Pagar', // Cambia el texto del botón de pago (opcional)
            }
        });
    </script>



</x-app-layout>
