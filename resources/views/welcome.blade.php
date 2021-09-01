@extends('layouts.master')

@section('content')

<div class="page-welcome full-height pt-5">
    <div class="container">
        <div class="row welcome">
            <h3 class="col-md-12">Bem vindo!</h3>
        </div>
        <hr>
        <div class="c-options-box">
            <ul class="c-options-box__list">
                <li>
                    <a class="c-options-box__button btn" href="./consulta-inscritos/">
                        @include('icons.icon-search')
                        <span>Consulta de Membro<span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="{{ route('inscricao') }}">
                        @include('icons.address-card-regular')
                        <span>Inscrever-se no CFEP</span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="./consulta-instituicoes/">
                        @include('icons.icon-search')
                        <span>Consulta de Parceiro<span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="./seja-um-parceiro/">
                        @include('icons.icon-parceiro')
                        <span>Seja um Parceiro</span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="{{ route('carteirinha') }}">
                        @include('icons.address-card-regular')
                        <span>2ª via Identidade Profissional<span>
                    </a>
                </li>
                <li style="margin-right: 0">
                    <a class="c-options-box__button btn" href="./home">
                        @include('icons.icon-user')
                        <span>Meu CFEP</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

@section('footer')
    @include('partials.footer')
@show

@stop
