@extends('layouts.adm')

@section('content')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
            <h1 class="h2">Detalhes do inscrito Nº{{ $membro->id }}</h1>

            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <form id="remove" action="{{ route('adm.membros.update', $membro->id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if ($membro->status == 'I')
                            <input type="hidden" name="status" value="A">
                            <button type="submit" class="btn btn-success"><span>Ativar</span></button>
                        @else
                            <input type="hidden" name="status" value="I">
                            <button type="submit" class="btn btn-danger"><span>Inativar Inscrição</span></button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <div class="row consulta-perfil">
            <div class="col-md-3">
                @if ($membro->foto)
                    <img class="foto-img img-fluid border mb-4" src="/images/fotos-membros/{{ $membro->foto }}">
                @else
                    <div
                        class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
                        <small>Sem Foto</small>
                    </div>
                @endif
            </div>

            <ul class="col-md-9 p-0">
                <li class="font-weight-bold mb-3"><span>{{ $membro->nome }}</span></li>

                <fieldset class="border p-2 mb-2">
                    <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

                    <li><span>Nº inscrição: </span>{{ $membro->id }}</li>
                    <li><span>Expedido: </span>{{ $membro->expedido }}</li>
                    <li><span>Validade: </span>{{ $membro->validade }}</li>
                    <li><span>Situação: </span>{{ $membro->situacao }}</li>
                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <legend class="w-auto m-0 fs-20">Dados pessoais</legend>

                    <li><span>Nome: </span>{{ $membro->nome }}</li>
                    <li><span>Mãe: </span>{{ $membro->nomeM }}</li>
                    <li><span>Pai: </span>{{ $membro->nomeP }}</li>
                    <li><span>Nascimento: </span>{{ $membro->dataNasc }}</li>
                    <li><span>Sexo: </span>{{ $membro->sexo }}</li>
                    <li><span>RG: </span>{{ $membro->rg }}</li>
                    <li><span>CPF: </span>{{ $membro->cpf }}</li>
                    <li><span>Endereço: </span>{{ $membro->endereco }}</li>
                    <li><span>UF: </span>{{ $membro->uf }}</li>
                    <li><span>E-mail: </span>{{ $membro->email }}</li>
                    <li><span>Telefone: </span>{{ $membro->foneF }} / {{ $membro->fone }}</li>
                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <legend class="w-auto m-0 fs-20">Graduação</legend>

                    <li><span>Graduação: </span>{{ $membro->graduacao }}</li>
                    <li><span>Universidade: </span>{{ $membro->universidade }}</li>
                    <li><span>Data Formação: </span>{{ $membro->dataFormacao }}</li>

                </fieldset>
                <fieldset class="border p-2 mb-2">
                    <legend class="w-auto m-0 fs-20">Documentação</legend>

                    <li><span>PDF </span><a href="#">Baixar</a></li>
                    <li><span>PDF </span><a href="#">Baixar</a></li>
                    <li><span>PDF </span><a href="#">Baixar</a></li>
                    <li><span>PDF </span><a href="#">Baixar</a></li>
                    <li><span>PDF </span><a href="#">Baixar</a></li>
                </fieldset>
            </ul>
        </div>
</div @endsection
