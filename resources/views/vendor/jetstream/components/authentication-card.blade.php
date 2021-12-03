<style>
    .imagen {
        background-image: url("{{ asset('img/conjunto.jpg') }}");     
    }

    .rgb {
        background-color: rgba(0,0,0,.90);
    }

</style>
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 imagen bg-fixed bg-bottom">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg rgb">
        {{ $slot }}
    </div>
</div>
