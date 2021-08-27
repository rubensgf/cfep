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

<body style="overflow: hidden">
    <div id="preloader">
        <div class="inner">
           <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
           {{-- <div data-loader-gift class="row justify-content-center my-5 is-hidden">
                <img src="/images/gif/loader-blue.gif" width="40">
            </div> --}}
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>                    
             </div>
        </div>
    </div>
    <div id="app">
        <main class="wrapper-sidebar">

            @include('layouts._nav')

            <div id="content">
                @section('header')
                    @include('partials.layout.header')
                @show

                <div class="navbar-light">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        @include('icons.icon-chevron-double-right')
                    </button>
                </div>

                <div class="container mt-5">
                    @yield('content')
                </div>
                @section('footer')
                    @include('partials.footer')
                @show
            </div>
        </main>
    </div>
</body>
@yield('script_footer')

</html>
