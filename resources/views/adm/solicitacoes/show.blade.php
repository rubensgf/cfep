@extends('layouts.adm')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
        <h1 class="h2">Detalhes - solicitação  Nº{{ $pedido->id }} </h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pull-right">
                    <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2">Voltar</a>
                </div>

                @if ($pedido->status === 'aguardando' ) 
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $pedido_id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <input type="hidden" name="status" value="confirmado">
                            <button type="submit" class="btn btn-success mr-2"><span>conf. pagto manual</span></button>
                    </form>
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $pedido_id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <input type="hidden" name="status" value="cancelado">
                            <button type="submit" class="btn btn-success"><span>Cancelar pedido</span></button>
                    </form>
                @else
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $membro->id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="situacao" value="grafica">
                            <button type="submit" class="btn btn-warning"><span>gráfica</span></button>
                    </form>
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $membro->id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="situacao" value="enviado">
                            <button type="submit" class="btn btn-danger"><span>enviado</span></button>
                    </form>
                @endif    
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
