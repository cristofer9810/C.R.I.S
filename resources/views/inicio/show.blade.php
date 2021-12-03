<x-app-layout>


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
        <i class="fas fa-file-alt fa-3x"></i>
        <h1 class="py-2 text-4xl font-bold text-gray-700">{{ $release->name }}</h1>
        <div class="mb-2 text-lg text-left text-gray-600">
            {!! $release->extract !!}
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">

            {{-- contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    @if ($release->image)
                        <img class="object-cover object-center w-full h-80"
                            src="{{ Storage::url($release->image->url) }}">
                    @else
                        <img class="object-cover object-center w-full h-80"
                            src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                    @endif
                </figure>

                <div class="mt-4 text-base text-left text-gray-500 ">
                    {!! $release->body !!}
                </div>
            </div>

            <aside>
                <h1 class="pl-10 mb-4 text-2xl font-bold text-left text-gray-700">Similares a estos:
                </h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-4 text-left">
                            <a class="flex" href="{{ route('inicio.show', $similar) }}"></a>

                            @if ($similar->image)
                                <img class="object-cover object-center h-20 w-36"
                                    src="{{ Storage::url($similar->image->url) }}">
                            @else
                                <img class="object-cover object-center w-full h-80"
                                    src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                            @endif

                            <span class="ml-2 text-left text-gray-600">{{ $similar->name }}</span>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>

    </div>



</x-app-layout>
