@extends('layouts.adm')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Detalhes membro</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                              <form id="remove" action="{{ route('adm.membros.update',  $membro->id ) }}" method="post" onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if ( $membro->status == 'I')
                                    <input type="hidden" name="status" value="A">
                                    <button type="submit" class="btn btn-success"><span>Ativar</span></button>
                                @else
                                    <input type="hidden" name="status" value="I">
                                    <button type="submit" class="btn btn-danger"><span>Bloquear</span></button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                {{ $membro->nome }}<br>
                {{ $membro->foto }}<br>
        {{ $membro->id}}<br>
        {{ $membro->nome}}<br>
        {{ $membro->nomeM}}<br>
        {{ $membro->nomeP}}<br>
        {{ $membro->dataNasc}}<br>
        {{ $membro->sexo}}<br>
        {{ $membro->rg}}<br>
        {{ $membro->cpf}}<br>
        {{ $membro->endereco}}<br>
        {{ $membro->uf}}<br>
        {{ $membro->foneF}}<br>
        {{ $membro->fone}}<br>
        {{ $membro->email}}<br>
        {{ $membro->expedido}}<br>
        {{ $membro->validade}}<br>
        {{ $membro->situacao}}<br>
        {{ $membro->graduacao}}<br>
        {{ $membro->universidade}}<br>
        {{ $membro->dataFormacao}}<br>
        {{ $membro->observacao }}
                </div>





@endsection
