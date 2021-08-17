@extends('layouts.adm')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
        <h1 class="h2">QrCode</h1>

        <div class="pull-right">
            <a href="javascript:history.back()" class="btn btn-secondary mr-1">Voltar</a>
        </div>

        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="A">
                <button type="button" class="btn btn-primary"><span>Baixar PDF</span></button>
            </div>
        </div> --}}
    </div>

    <div class="row consulta-perfil">
        <div class="col-md-3">
            @if ($dados->foto)
                <img class="foto-img img-fluid border mb-4" src="/images/fotos-membros/{{ $dados->foto }}">
            @else
                <div
                    class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
                    <small>Sem Foto</small>
                </div>
            @endif
        </div>

        <ul class="col-md-9 p-0">
            <li class="mb-3"><span class="font-weight-bold">{{ $dados->nome }}</span></li>

            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

                <li>N° inscrição: <span>{{ $dados->ncarteirinha }}</span></li>
                <li>Expedido: <span>{{ $dados->expedido }}</span></li>
                <li>Validade: <span>{{ $dados->vigencia }}</span></li>
                <li>Situação: <span>{{ $dados->ativo }}</span></li>
            </fieldset>

            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Dados pessoais</legend>

                <li>Nome: <span>{{ $dados->nome }}</span></li>
                <li>Mãe: <span>{{ $dados->nome_mae }}</span></li>
                <li>Pai: <span>{{ $dados->nome_pai }}</span></li>
                <li>Nascimento: <span>{{ $dados->data_nascimento }}</span></li>
                <li>Sexo: <span>{{ $dados->sexo }}</span></li>
                <li>RG: <span>{{ $dados->rg }}</span></li>
                <li>CPF: <span>{{ $dados->cpf }}</span></li>
                <li>Endereço: <span>{{ $dados->endereco }}</span></li>
                <li>UF: <span>{{ $dados->uf }}</span></li>
                {{-- <li>E-mail: <span>{{ $dados->email }}</span></li> --}}
                <li>Telefone: <span>{{ $dados->telefone }} / {{ $dados->celular }}</span></li>
            </fieldset>
            {{-- <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Graduação</legend>

                <li>Graduação: <span>{{ $dados->graduacao }}</span></li>
                <li>Universidade: <span>{{ $dados->universidade }}</span></li>
                <li>Data Formação: <span>{{ $dados->dataFormacao }}</span></li>

            </fieldset> --}}
        </ul>
    </div>
    


    {{-- <div class="table-responsive">
        {{ $dados->foto }} <br>
        {{ $dados->user_id }} <br>
        {{ $dados->ncarteirinha }} <br>
        {{ $dados->nome }} <br> {{ $dados->nome_mae }} <br>
        {{ $dados->nome_pai }} <br> {{ $dados->sexo }} <br>
        {{ $dados->data_nascimento }} <br>
        {{ $dados->rg }} <br>
        {{ $dados->cpf }} <br>
        {{ $dados->telefone }} <br>
        {{ $dados->celular }} <br>
        {{ $dados->endereco }} <br>
        {{ $dados->numero }} <br>
        {{ $dados->cidade }} <br>
        {{ $dados->uf }} <br>
        {{ $dados->cep }} <br>
        {{ $dados->foto }} <br>
        {{ $dados->expedido }} <br>
        {{ $dados->vigencia }} <br>
        {{ $dados->ativo }} <br>
    </div> --}}

@endsection
