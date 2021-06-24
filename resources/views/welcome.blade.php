<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <p><a href="http://127.0.0.1:8001/consulta-instituicoes"> consulta instituicoes </a> - <a href="http://127.0.0.1:8001/consulta-instituicoes/colegio"> resultado consulta instituicoes </a></p>
                <p><a href="http://127.0.0.1:8001/consulta-inscritos/16000001"> consulta inscritos </a> - <a href="http://127.0.0.1:8001/consulta-inscritos/16000001"> resultado consulta inscritos </a></p>
                <p><a href="http://127.0.0.1:8001/consulta-qrcode/12345"> resultado Qr CODE </a></p>
                <p><a href="http://127.0.0.1:8001/inscricao"> formulario - inscricao </a></p>
                <p><a href="http://127.0.0.1:8001/seja-um-parceiro"> formulario - seja-um-parceiro </a></p>
            </div>
        </div>
    </body>
</html>
