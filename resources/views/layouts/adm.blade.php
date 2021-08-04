<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CFEP') }}</title>

    @include('partials.head')
</head>

<body>
    <div id="app">

        @section('header')
            @include('partials.layout.header')
        @show
        <!------------------------------------------------->
        <main class="py-4">
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        @include('layouts._nav')
                    </nav>

                    @yield('content')

                </div>
            </div>
        </main>

    </div>
</body>

</html>
