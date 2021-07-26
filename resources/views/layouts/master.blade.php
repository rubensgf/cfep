<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('partials.head')
</head>

<body>
    <main id="conteudo" class="main">
        @yield('content')
    </main>

    {{-- @section('footer')
        @include('partials.layout.footer')
      @show --}}


    {{-- @section('scripts')
        @ssinclude('assets/js.inc')
      @show --}}

    {{-- <script src="http://66.dev.storybook.corp.folha.com.br/build/js/portal-503eed5974.js"></script> --}}


    {{-- @include('partials.ads.1x1') --}}
    {{-- < rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> --}}
    {{-- <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('js/bootstrap.js') }}" defer></script> --}}


</body>

</html>
