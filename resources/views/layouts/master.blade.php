<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('partials.head')
</head>

<body>
    <div id="app">
        <main class="main">
            @section('header')
                @include('partials.layout.header')
            @show

            {{-- @include('layouts._nav') --}}


                @yield('content')
        </main>
    </div>
    {{-- @section('footer')
        @include('partials.layout.footer')
      @show --}}
</body>

</html>
