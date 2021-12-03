<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .imagen {
            background-image: url("{{ asset('img/conjunto.jpg') }}");
            height: 700px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
        

    </style>
    <div class="bg-fixed bg-top imagen mb-7">
    </div>
    <div class="container py-10 text-center border-t-2 border-black">
        <span><i class="far fa-images fa-3x"></i></span>
    </div>
    <h1 class="py-1 text-5xl font-bold leading-8 text-center">Galería<h1>
        <br>

            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($views as $view)
                            @if ($view->gallery)
                                {{-- el codigp de {{ $loop->first ? 'active' : '' }} activa para que mi slider funcione y se mueva --}}
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="object-center w-full h-96"
                                        src="{{ Storage::url($view->gallery->url) }}">
                                        <h3 class=" text-center">{{$view->name}}</h3>
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img class="object-cover object-center w-full h-80"
                                        src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                                </div>

                            @endif
                        @endforeach
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
<br>
<br>
<br>
                <h1 class="py-3 text-5xl font-bold leading-8 text-center">Aquí estamos<h1>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1314.1613062054853!2d-74.11098148659973!3d4.747602198521642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f84881e5a1d15%3A0x4d8baedf63b1eb11!2sCl.%20142%20%23128c-26%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1628546171531!5m2!1ses!2sco"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</x-app-layout>
