<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel' }}</title>
    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('css/lineicons.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    @vite('resources/sass/app.scss')
</head>

<body>
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            {{ $slot }}
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->

    <!-- ========= All Javascript files linkup ======== -->
    @vite('resources/js/app.js')
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.all.min.js"></script>
</body>

</html>
