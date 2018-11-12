<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" rel="stylesheet">

    @yield('head')

</head>
<body>

<main class="py-4">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2">
                @include('partials.website')

                @yield('left')
            </div>

            <div class="col-md-10">
                @yield('right')
            </div>

        </div>
    </div>
</main>

</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

</html>
