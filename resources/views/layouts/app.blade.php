<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @include('partials.head')
</head>
<body>
    <div id="app">

        @include('partials.layout.header')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
