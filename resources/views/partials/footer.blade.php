
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-about wow fadeInUp">
                    <h3>CFEP</h3>
                    <p class="mb-md-0">Conselho Federal de <br>
                        Educadores e Pedagogos</p>
                    {{-- <p class="mb-md-0">&copy; Todos os direitos reservados</p> --}}
                </div>
                {{-- <div class="col-md-4 offset-md-1 footer-contact wow fadeInDown">
                    <h3>Contact</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Via Rossini 10, 10136 Turin Italy</p>
                    <p><i class="fas fa-phone"></i> Phone: (0039) 333 12 68 347</p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:hello@domain.com">hello@domain.com</a></p>
                    <p><i class="fab fa-skype"></i> Skype: you_online</p>
                </div> --}}
                <div class="col-md-5 footer-links wow fadeInUp border-right">
                    <div class="row">
                        <div class="col">
                            <h3>Links</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <li><a class="scroll-link" href="/">Home</a></li>
                            <li><a href="{{ route('inscricao') }}">Inscrever-se</a></li>
                        </div>
                        <div class="col-md-6">
                            {{-- <li><a href="/consulta-instituicoes/">Consulta de Parceiro</a></li> --}}
                            <li><a href="/consulta-inscritos/">Consulta de Membro</a></li>
                            <li><a href="/seja-um-parceiro/">Seja um Parceiro</a></li>
                            {{-- <li><a href="{{ route('carteirinha') }}">2ª Via</a></li> --}}
                            {{-- <li><a href="{{ route('perfil') }}">Meu CFEP</a></li> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 footer-social d-flex flex-wrap align-items-center justify-content-center mt-3 mt-md-0">
                    <div class="row d-flex">
                        <a class="mr-3" href="https://www.facebook.com/CFEP-634334730071765/" title="Página no Facebook">@include('icons.icon-facebook')</a>
                        <a class="mr-3" href="https://www.youtube.com/channel/UC7aSfXuFu4Fke3jToYVnhzQ" title="Canal no YouTube">@include('icons.icon-youtube')</a>
                        <a class="mr-3" href="https://www.cfep.org.br/" title="Site do CFEP">@include('icons.icon-site')</a>
                        <a href="mailto:contato@cfep.org.br" title="Fale conosco">@include('icons.icon-email')</a>
                    </div>
                    <p class="mb-md-0 w-100 text-center">&copy; Todos os direitos reservados</p>

                </div>
            </div>
        </div>
    </div>
    {{-- <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col footer-social">
                    <a href="https://www.facebook.com/CFEP-634334730071765/">@include('icons.icon-facebook')</a>
                    <a
                        href="https://www.youtube.com/channel/UC7aSfXuFu4Fke3jToYVnhzQ">@include('icons.icon-youtube')</a>
                    <a href="https://www.cfep.org.br/">@include('icons.icon-site')</a>
                    <a href="mailto:contato@cfep.org.br">@include('icons.icon-email')</a>

                </div>
            </div>
        </div>
    </div> --}}
</footer>
