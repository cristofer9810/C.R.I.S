<div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="{{ asset('js/admin/jquery-1.11.2.min.js') }}"><\/script>')
    </script>
    <script src="{{ asset('js/admin/modernizr.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/admin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/admin/main.js') }}"></script>


    {{-- <script src="{!! asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') !!}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script> --}}

</div>
