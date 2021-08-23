@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-5 border-bottom">
        <h1 class="h2">Perfil</h1>

        <div class="pull-right">
            <a href="javascript:history.back()" class="btn btn-outline-secondary mr-1">Voltar</a>
        </div>
    </div>

    <div class="row consulta-perfil">
        @foreach ($dados as $i)
            <div class="col-md-3 d-flex flex-column align-items-center">
                <div class="foto-perfil">
                    @if ($i->foto)
                        <img class="foto-img img-fluid border mb-4" src="{{url('/storage/files/')}}/{{ $i->ncarteirinha }}/{{ $i->foto }}">
                    @else
                        <div
                            class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
                            <small>Sem Foto</small>
                        </div>
                    @endif
                </div>

                <div data-qrcode 
                    data-qrcode-perfil 
                    data-qrcode-id="{{ $i->ncarteirinha }}" 
                    class="qrcode d-flex justify-content-center">
                </div>
                <p class="px-3">Aponte a câmera do seu celular</p>
                
            </div>

            <ul class="col-md-9 p-0">
                <li class="mb-3"><span class="font-weight-bold">{{ $i->nome }}</span></li>

                <fieldset class="p-3 mb-3">
                    <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

                    <li>N° inscrição: <span>{{ $i->ncarteirinha }}</span></li>
                    <li>Expedido: <span>{{ $i->expedido }}</span></li>
                    <li>Validade: <span>{{ $i->vigencia }}</span></li>
                    <li>Situação: <span>{{ $i->ativo ? 'Ativo' : 'Inativo'}}</span></li>
                </fieldset>

                <fieldset class="p-3 mb-3">
                    <legend class="w-auto m-0 fs-20">Dados pessoais</legend>

                    <li>Nome: <span>{{ $i->nome }}</span></li>
                    <li>Mãe: <span>{{ $i->nome_mae }}</span></li>
                    <li>Pai: <span>{{ $i->nome_pai }}</span></li>
                    <li>Nascimento: <span>{{ $i->data_nascimento }}</span></li>
                    <li>Sexo: <span>{{ $i->sexo }}</span></li>
                    <li>RG: <span>{{ $i->rg }}</span></li>
                    <li>CPF: <span>{{ $i->cpf }}</span></li>
                    <li>Endereço: <span>{{ $i->endereco }}, {{ $i->numero }}</span></li>
                    <li>Cidade: <span>{{ $i->cidade }} - {{ $i->uf }}</span></li>
                    <li>E-mail: <span>{{ $i->email }}</span></li>
                    <li>Telefone: <span>{{ $i->telefone }} / {{ $i->celular }}</span></li>
                </fieldset>
                {{-- <fieldset class="p-3 mb-3">
                    <legend class="w-auto m-0 fs-20">Graduação</legend>
    
                    <li>Graduação: <span>{{ $i->graduacao }}</span></li>
                    <li>Universidade: <span>{{ $i->universidade }}</span></li>
                    <li>Data Formação: <span>{{ $i->dataFormacao }}</span></li>
    
                </fieldset> --}}
            </ul>
        @endforeach
    </div>
@endsection
