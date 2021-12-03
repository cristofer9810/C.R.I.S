<x-app-layout>

    <style>
        .imagen {
            background-image: url("{{ asset('img/conjunto2.jpg') }}");
            height: 300px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .titulo {
            font-size: 55px;
            text-transform: uppercase;
            letter-spacing: 7px;
        }

        .galeria img {
            box-shadow: 0 8px 10px -4px rgba(0, 0, 0, .6);
            border-radius: 15px;
        }

        .materialbox-caption {
            bottom: 30px;
            right: 0;
            width: 40%;
            height: auto;
            padding: 10px;
            margin: auto;
            background: #000;
            box-shadow: 5px 5px #fff;
            font-size: 20px;
            color: #fff;
            line-height: 28px;
        }

        .galeria .col {
            margin-bottom: 20px;
        }

        @media screen and (max-width: 600px) {
            .materialbox-caption {
                width: 90%;
            }
        }

        @media screen and (max-width: 992px) {
            .materialbox-caption {
                width: 70%;
            }
        }

    </style>


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 

    <div class="bg-fixed bg-bottom imagen mb-7">
    </div>

    <div class="container py-10 text-center border-t-2 border-black">
        <i class="far fa-images fa-3x"></i>
        <h1 class="py-2">Galería</h1>
        <h4 class="font-medium">conocé nuestro cojunto más de cerca
        </h4>
    </div>






    <div class="container py-8">
        <div class="grid grid-cols-3 gap-6">

            @foreach ($views as $view)
                @if ($view->gallery)
                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img id="picture" class="responsive-img materialboxed"
                                data-caption="{{$view->name}}"
                                src="{{ Storage::url($view->gallery->url) }}">
                        </div>
                    </div>
                @else

                    <div class="col s12 m4 l3">
                        <div class="material-placeholder">
                            <img class="responsive-img materialboxed"
                                data-caption="{{$view->name}}"
                                src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                        </div>
                    </div>

                @endif
            @endforeach
        </div>
    </div>


    {{-- <div class="container py-8">
        <div class="grid grid-cols-3 gap-6">
        </div>
    </div> --}}

    {{-- aqui se hara un glozario para las imagenes --}}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const imgLightBox = document.querySelectorAll('.materialboxed');
            M.Materialbox.init(imgLightBox, {
                inDuration: 500,
                outDuration: 500
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</x-app-layout>
