@extends('layouts.master')

@section('content')
    <div class="page-welcome flex full-height">
    
    <div class="content">
        {{-- @if (isset($) && isset($)) --}}
        {{-- <div class="row">
            <h3 class="col-md-12">Bem vindo!</h3>
        </div> --}}
        {{-- @include('partials.layout.indicadores') --}}
        {{-- <hr> --}}
        
        <div class="c-options-box pb-0">
            <ul class="c-options-box__list"> 
                @if (Auth::user()->role == 'adm' || Auth::user()->role == 'adm_membros')
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

        {{-- @else --}}
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
