<nav id="sidebar">
    <div class="sidebar-header" style="z-index: 99">
        @guest
            <h3 class="text-center mb-0">
                <a class="navbar-brand" href="{{ url('/') }}">CFEP</a>
            </h3>
        @else
            <h3 class="text-center mb-0">
                <a class="navbar-brand" href="{{ url('/home') }}">CFEP</a>
            </h3>
        @endguest
        {{-- <h3 class="text-center mb-0">CFEP</h3> --}}
    </div>

    <ul class="list-unstyled components">
        @guest
            <p></p>
            <li><a href="{{ route('inscricao') }}">Inscrever-se</a></li>
            <li><a href="/consulta-inscritos/">Consulta de Membro</a></li>
            <li><a href="/consulta-instituicoes/">Consulta de Parceiro</a></li>
            <li><a href="/seja-um-parceiro/">Seja um Parceiro</a></li>
            <li><a href="{{ route('carteirinha') }}">2ª Via</a></li>
            <li><a href="{{ route('perfil') }}">Meu CFEP</a></li>
        @else
            <p></p>
            <li><a href="{{ route('home') }}">Home</a></li>
            @if (Auth::user()->role == 'adm' || Auth::user()->role == 'adm_membro')
                <li><a href="{{ route('solicitacoes') }}">Solicitações</a></li>
                <li><a href="{{ route('entidades') }}">Entidades</a></li>
                <li><a href="{{ route('membros') }}">Membros</a></li>

            @endif
            <hr>
            @if (Auth::user()->role == 'user' || Auth::user()->role == 'adm_membro')
            <li><a href="{{ route('perfil') }}">Meus dados</a></li>
            <li><a href="{{ route('carteirinha') }}">Carteirinha</a></li>
            <li><a href="{{ route('certificado') }}">Certificado</a></li>
            <li><a href="{{ route('perfil') }}">QR Code</a></li>
            @endif

            <hr>
            <ul class="list-unstyled CTAs">
                <li>
                    <a class="btn-sair btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                        {{ __('SAIR') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        @endguest
    </ul>
</nav>
