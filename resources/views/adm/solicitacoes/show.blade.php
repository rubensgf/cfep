@extends('layouts.adm')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
        <h1 class="h2">Detalhes - solicitação  Nº{{ $membro->id }} </h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pull-right">
                    <a href="javascript:history.back()" class="btn btn-secondary mr-2">Voltar</a>
                </div>
                <form id="remove" action="{{ route('adm.membros.update', $membro->id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    @if ($membro->ativo === '0')
                        <input type="hidden" name="ativo" value="1">
                        <button type="submit" class="btn btn-success"><span>Confirmar dados</span></button>
                    @else
                        <input type="hidden" name="ativo" value="0">
                        <button type="submit" class="btn btn-danger"><span>Inativar Inscrição</span></button>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        {{ $membro->nome }}<br>
        {{ $membro->foto }}<br>
        {{ $membro->id }}<br>
        {{ $membro->nome }}<br>
        {{ $membro->nomeM }}<br>
        {{ $membro->nomeP }}<br>
        {{ $membro->dataNasc }}<br>
        {{ $membro->sexo }}<br>
        {{ $membro->rg }}<br>
        {{ $membro->cpf }}<br>
        {{ $membro->endereco }}<br>
        {{ $membro->uf }}<br>
        {{ $membro->foneF }}<br>
        {{ $membro->fone }}<br>
        {{ $membro->email }}<br>
        {{ $membro->expedido }}<br>
        {{ $membro->validade }}<br>
        {{ $membro->situacao }}<br>
        {{ $membro->graduacao }}<br>
        {{ $membro->universidade }}<br>
        {{ $membro->dataFormacao }}<br>
        {{ $membro->observacao }}
    </div>

@endsection
