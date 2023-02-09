<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link
            href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
            rel="stylesheet"
        />
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
        <script
            src="https://use.fontawesome.com/releases/v6.1.0/js/all.js"
            crossorigin="anonymous"
        ></script>

        <link href="filepond.css" rel="stylesheet" />
        <link
            href="https://unpkg.com/filepond@^4/dist/filepond.css"
            rel="stylesheet"
        />
        <!-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" /> -->
        <link
            href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
            rel="stylesheet"
        />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link
            href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"
            rel="stylesheet"
        />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    </head>

    @livewireStyles

    <body class="sb-nav-fixed">
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

        <!-- header section strats -->

        @include('admin.layout.inc.header')
        <!-- header section strats -->

        @yield('main')

        <!-- footer end -->
        @include('admin.layout.inc.footer')
        <!-- <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    <link href="filepond.css" rel="stylesheet" />
    <script src="filepond.js"></script>

    <input type="file" />

    <script>
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type="file"]');

        // Create a FilePond instance
        const pond = FilePond.create(inputElement, {

            acceptedFileTypes: [
                'file/*',

            ],
            chunkUploads: true,
            chunkForce: true,
            allowBrowse: true,
            allowMultiple: true,
            server: {
                process: "/filepond-store",
                revert: "/filepond-delete",
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                },
            },
        });
    </script> -->

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"
        ></script>
        <script src="{{ asset('admin/js/script.js') }}"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
            crossorigin="anonymous"
        ></script>
        <script src="{{
                asset('admin/js/datatables-simple-demo.js')
            }}"></script>
        <script src="{{ asset('admin/js/custom.js') }}"></script>
        <!-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

        @livewireScripts
    </body>
</html>
