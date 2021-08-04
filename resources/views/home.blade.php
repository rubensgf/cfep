@extends('layouts.master')

@section('content')
    <div class="page-welcome flex full-height">
    @section('header')
        @include('partials.layout.header')
    @show

    <div class="content">
        {{-- @if (isset($) && isset($)) --}}
        @include('partials.layout.indicadores')
        <hr>
        
        <div class="c-options-box">
            <ul class="c-options-box__list">
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
                <li>
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.icon-pay')
                        <span>Pagamentos pendentes</span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.icon-parceiro')
                        <span>Solicitação de parceria<span>
                    </a>
                </li>
                <li style="margin-right: 0">
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.icon-user-adm')
                        <span>Novo Administrador</span>
                    </a>
                </li>
            </ul>
        </div>

        {{-- @else --}}
        <div class="c-options-box">
            MEMBRO
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
                <li>
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.icon-pay')
                        <span>Pagamento<span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="#">
                        @include('icons.address-card-regular')
                        <span>2ª via Identidade Profissional<span>
                    </a>
                </li>
                <li class="mr-0">
                    <a class="c-options-box__button btn" href="mailto:contato@cfep.org.br">
                        @include('icons.icon-email')
                        <span>Fale conosco</span>
                    </a>
                </li>
            </ul>
        </div>
        {{-- @endif --}}
    </div>
</div>

@section('footer')
    @include('partials.footer')
@show

@stop
