@extends('layouts.master')

@section('content')
<div class="page-welcome full-height pb-5 pt-3 pt-md-5">
    <div class="container">
        <div class="row welcome">
            @if (Auth::user()->role == 'adm' || Auth::user()->role == 'adm_membro')
                <h3 class="col-md-12">Bem vindo ao Admin CFEP!</h3>
            @elseif (Auth::user()->role == 'user')
                <h3 class="col-md-12">Bem vindo ao Meu CFEP!</h3>
            @endif
        </div>
        <hr>
        
        <div class="c-options-box pb-0 pt-3 pt-md-5">
            <ul class="c-options-box__list"> 
                @if (Auth::user()->role == 'adm' || Auth::user()->role == 'adm_membro')
                    <li>
                        <a class="c-options-box__button btn" href="{{ route('solicitacoes') }}">
                            @include('icons.icon-user-add')
                            <span>Solicitações pendentes<span>
                        </a>
                    </li>
                    <li>
                        <a class="c-options-box__button btn" href="{{ route('membros') }}">
                            @include('icons.icon-members')
                            <span>Membros</span>
                        </a>
                    </li>
                    <li>
                        <a class="c-options-box__button btn" href="{{ route('entidades') }}">
                            @include('icons.icon-entidades')
                            <span>Entidades parceiras<span>
                        </a>
                    </li>
                @endif
                <!--<li>
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.icon-pay')
                        <span>Pagamentos pendentes</span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="{{ route('adm.entidade.create') }}">
                        @include('icons.icon-parceiro')
                        <span>Solicitação de parceria<span>
                    </a>
                </li>
                <li style="margin-right: 0">
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.icon-user-adm')
                        <span>Novo Administrador</span>
                    </a>
                </li> -->
            </ul>
        </div>

        @if (Auth::user()->role == 'user' || Auth::user()->role == 'adm_membro')
            <div class="c-options-box pt-0">
                <ul class="c-options-box__list">
                    <li>
                        <a class="c-options-box__button btn" href="{{ route('certificado') }}">
                            @include('icons.icon-certificado')
                            <span>Certificado<span>
                        </a>
                    </li>
                    <li>
                        <a class="c-options-box__button btn" href="{{ route('carteirinha') }}">
                            @include('icons.address-card-regular')
                            <span>Identidade profissional</span>
                        </a>
                    </li>
                    <li class="mr-md-0">
                        <a class="c-options-box__button btn" href="mailto:contato@cfep.org.br">
                            @include('icons.icon-email')
                            <span>Fale conosco</span>
                        </a>
                    </li>
                    <li class="mr-md-0">
                        <a class="c-options-box__button btn" href="{{ route('perfil') }}">
                            @include('icons.icon-user')
                            <span>Meus Dados</span>
                        </a>
                    </li>
                </ul>
            </div>
        @endif
    </div>
</div>

@section('footer')
    @include('partials.footer')
@show

@stop
