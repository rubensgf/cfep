@extends('layouts.master')

@section('content')

@section('header')
    @include('partials.layout.header')
@show

<div class="page-welcome full-height pt-5">
    <div class="container">
        <div class="row">
            <h3 class="col-md-12">Bem vindo!</h3>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-3 col-sm-6 mb-3 mb-sm-0">
                <div class="card-stats card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="text-center text-primary fs-14">
                                    @include('icons.icon-users')
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="card-category">Total de Membros</p>
                                    <h4 class="card-title mb-0">5488</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            @include('icons.icon-atualizado')
                            Atualizado
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card-stats card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="text-center text-primary">
                                    @include('icons.icon-parceiro')
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="card-category">Empresas Parceiras</p>
                                    <h4 class="card-title mb-0">47</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            @include('icons.icon-atualizado')
                            Atualizado
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="c-options-box">
            <ul class="c-options-box__list">
                <li>
                    <a class="c-options-box__button btn" href="./consulta-inscritos/">
                        @include('icons.search')
                        <span>Consulta de Membro<span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="./inscricao/">
                        @include('icons.address-card-regular')
                        <span>Inscrever-se no CFEP</span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="./consulta-instituicoes/">
                        @include('icons.search')
                        <span>Consulta de Instituição Parceira<span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="./seja-um-parceiro/">
                        @include('icons.icon-parceiro')
                        <span>Seja um Parceiro</span>
                    </a>
                </li>
                <li>
                    <a class="c-options-box__button btn" href="./consulta-qrcode/">
                        @include('icons.icon-qrcode')
                        <span>Consulta de Membro via QR Code<span>
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
