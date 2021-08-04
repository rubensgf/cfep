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
</body>

</html>
