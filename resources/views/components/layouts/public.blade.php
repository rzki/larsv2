<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title>
    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-class.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/regular.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.min.css') }}">
    <style>
        .navbar-light .navbar-nav .nav-link:hover {
            color: #dc3545 !important;
        }

        .dropdown-toggle::after {
            border: none !important;
        }

        /* Daftar Akreditasi */
        .daftar-akreditasi:hover {
            background-color: #980900;
            color: #fef;
            transition: 0.25s;
            border-radius: 5px;
        }

        .fa-file {
            color: #980900;
        }

        .daftar-akreditasi:hover .fa-file {
            color: #fef;
        }

        /* Cek Permohonan */
        .cek-permohonan:hover {
            background-color: #E51900;
            color: #fef;
            transition: 0.25s;
            border-radius: 5px;
        }

        .fa-magnifying-glass {
            color: #E51900;
        }

        .cek-permohonan:hover h3.card-title,
        .cek-permohonan:hover .fa-magnifying-glass {
            color: #fef;
        }

        .fa-instagram {
            width: 3em;
        }
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('layouts.public.nav')
    <!-- Navbar -->

    <!-- ========== main content start ========== -->
    <main class="main">
        {{ $slot }}
        <!-- end container -->
    </main>
    <!-- ========== main content end ========== -->

    {{-- Footer --}}
    @include('layouts.public.footer')
    {{-- End Footer --}}

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>
