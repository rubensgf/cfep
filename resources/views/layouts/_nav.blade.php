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
            <li class="active"><a href="{{ route('inscricao') }}">Inscrever-se</a></li>
            <li><a href="/consulta-inscritos/">Consulta de Membro</a></li>
            <li><a href="/consulta-instituicoes/">Consulta de Parceiro</a></li>
            <li><a href="/seja-um-parceiro/">Seja um Parceiro</a></li>
            <li><a href="{{ route('carteirinha') }}">2ª Via</a></li>
            <li><a href="{{ route('perfil') }}">Meu CFEP</a></li>
        @else
            <p></p>
            @if (Auth::user()->role == 'adm' || Auth::user()->role == 'user'  )
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('solicitacoes') }}">Solicitações</a></li>
            <li><a href="{{ route('entidades') }}">Entidades</a></li>
            <li><a href="{{ route('membros') }}">Membros</a></li>
            
            @endif
            <hr>
            <li><a href="{{ route('perfil') }}">Meus dados</a></li>
            <li><a href="{{ route('carteirinha') }}">Carteirinha</a></li>
            <li><a href="{{ route('certificado') }}">Certificado</a></li>
            <li><a href="{{ route('perfil') }}">QR Code</a></li>
        @endguest

    </ul>

    {{-- <ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul> --}}
</nav>
