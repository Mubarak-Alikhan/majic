<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Majic</title>
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" rel="preload" as="style" />
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}" rel="preload" as="style" />
    <link rel="stylesheet" href="{{ asset('summernote/summernote.min.css') }}" rel="preload" as="style" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'></link> 
</head>

<body>
    @include('layouts.inc.header') @yield('main')
    <!-- footer end -->

    @include('layouts.inc.footer')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="{{ asset('js/access.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/general.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/sub.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


    @stack('script')
</body>

</html>