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
        <h1 class="py-2">{{ $category->name }}</h1>
        <h4 class="font-medium">cónoce las publicaciones que hace el conjunto
        </h4>
    </div>

    <div class="max-w-5xl px-2 mx-auto sm:px-6 lg:px-8">
        @foreach ($releases as $release)

            <article class="mb-8 overflow-hidden bg-white rounded-lg shadow-lg">

                @if ($release->image)
                    <img class="object-cover object-center w-full h-72" src="{{ Storage::url($release->image->url) }}">

                @else
                    <img class="object-cover object-center w-full h-80"
                        src="https://cdn.pixabay.com/photo/2021/03/02/13/04/laptop-6062423_960_720.jpg">
                @endif
                <div class="px-6 py-8">

                    <h1 class="mb-2 text-xl font-bold"></h1>
                    <a class="text-xl font-bold text-gray-500 no-underline hover:no-underline hover:text-gray-800"
                        href="{{ route('inicio.show', $release) }}">{{ $release->name }}</a>



                    <div class="text-base text-gray-700">
                        {!! $release->extract !!}
                    </div>
                </div>

            </article>

        @endforeach

        <div class="pb-4 mt-4">
            {{ $releases->links() }}
        </div>

    </div>




</x-app-layout>
