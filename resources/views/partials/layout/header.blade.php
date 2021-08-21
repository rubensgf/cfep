@if (Route::has('login'))
    <nav class="c-nav navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            @guest
                <a class="navbar-brand fs-18 font-weight-bold d-flex justify-content-center align-items-center color-grey"
                    href="{{ url('/') }}">
                    <img src="/images/icon-logo-cfep.png" width="50" alt="Logo CFEP"><span class="ml-2"> CFEP</span>
                </a>
            @else
                <a class="navbar-brand fs-18 font-weight-bold d-flex justify-content-center align-items-center color-grey"
                    href="{{ url('/home') }}">
                    <img src="/images/icon-logo-cfep.png" width="50" alt="Logo CFEP"><span class="ml-2"> CFEP</span>
                </a>

            @endguest
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link btn btn-outline-info" data-toggle="modal"
                                data-target="#modal-login">{{ __('Fazer Login') }}</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-button--login btn btn-outline-info" href="{{ route('login') }}">Fazer Login</a>
                        </li>
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('perfil') }}"> {{ __('Conta e senha') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
@endif
