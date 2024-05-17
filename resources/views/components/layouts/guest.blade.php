<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <base href="./"> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/sass/app.scss')
    <style>
        .auth-cover-wrapper {
            background: linear-gradient(-15deg, #1469c3, #021B34);
        }
    </style>
</head>

<body>
    <div class="row g-0 auth-row">
        {{ $slot }}
    </div>
</body>

</html>
