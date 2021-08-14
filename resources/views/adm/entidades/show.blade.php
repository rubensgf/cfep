@extends('layouts.adm')

@section('content')
    <!---<div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Detalhes -  </h3>
                </div>
                <div class="pull-right">
                  <a href="javascript:history.back(-1)" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Voltar </a>
                </div>
            </div>
        </div>-->

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Detalhes - Entidades</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pull-right">
                    <a href="javascript:history.back()" class="btn btn-secondary mr-2">Voltar</a>
                </div>
                <form id="remove" action="{{ route('adm.entidade.update', $entidade->id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if ($entidade->ativo == '0')
                        <input type="hidden" name="ativo" value="1">
                        <button type="submit" class="btn btn-success"><span>Ativar</span></button>
                    @else
                        <input type="hidden" name="ativo" value="0">
                        <button type="submit" class="btn btn-danger"><span>Bloquear</span></button>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!--  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                    <h2>Section title</h2>-->
    <div class="table-responsive">
        {{ $entidade->razao_social }} <br>
        {{ $entidade->nome_fantasia }} <br>
        {{ $entidade->site }} <br>
        {{ $entidade->cnpj }} <br>
        {{ $entidade->endereco }} <br>
        {{ $entidade->numero }} <br>
        {{ $entidade->complemento }} <br>
        {{ $entidade->cep }} <br>
        {{ $entidade->bairro }} <br>
        {{ $entidade->cidade }} <br>
        {{ $entidade->uf }} <br>
        {{ $entidade->email }} <br>
        {{ $entidade->telefone }} <br>
        {{ $entidade->celular }} <br>
        {{ $entidade->nome }} <br>
        {{ $entidade->sexo }} <br>
        {{ $entidade->rg }} <br>
        {{ $entidade->cpf }} <br>
        {{ $entidade->expedido }} <br>
        {{ $entidade->validade }} <br>
        {{ $entidade->ativo }}
    </div>

    {{-- <div class="row consulta-perfil">
        <div class="col-md-3">
            @if ($membro->foto)
                <img class="foto-img img-fluid border mb-4" src="/images/fotos-membros/{{ $membro->foto }}">
            @else
                <div class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
                    <small>Sem Foto</small>
                </div>
            @endif
        </div>

        <ul class="col-md-9 p-0">
            <li class="mb-3"><span class="font-weight-bold">{{ $membro->nome }}</span></li>

            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

                <li>N° inscrição: <span>{{ $membro->id }}</span></li>
                <li>Expedido: <span>{{ $membro->expedido }}</span></li>
                <li>Validade: <span>{{ $membro->validade }}</span></li>
                <li>Situação: <span>{{ $membro->situacao }}</span></li>
            </fieldset>
            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Dados pessoais</legend>

                <li>Nome: <span>{{ $membro->nome }}</span></li>
                <li>Mãe: <span>{{ $membro->nomeM }}</span></li>
                <li>Pai: <span>{{ $membro->nomeP }}</span></li>
                <li>Nascimento: <span>{{ $membro->dataNasc }}</span></li>
                <li>Sexo: <span>{{ $membro->sexo }}</span></li>
                <li>RG: <span>{{ $membro->rg }}</span></li>
                <li>CPF: <span>{{ $membro->cpf }}</span></li>
                <li>Endereço: <span>{{ $membro->endereco }}</span></li>
                <li>UF: <span>{{ $membro->uf }}</span></li>
                <li>E-mail: <span>{{ $membro->email }}</span></li>
                <li>Telefone: <span>{{ $membro->foneF }} / {{ $membro->fone }}</span></li>
            </fieldset>
            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Graduação</legend>

                <li>Graduação: <span>{{ $membro->graduacao }}</span></li>
                <li>Universidade: <span>{{ $membro->universidade }}</span></li>
                <li>Data Formação: <span>{{ $membro->dataFormacao }}</span></li>

            </fieldset>
            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Documentação</legend>

                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
            </fieldset>
        </ul>
    </div> --}}
@endsection
