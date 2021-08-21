@extends('layouts.adm')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
    <h1 class="h2">Detalhes - solicitação  Nº{{ $pedido->id }} </h1>

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <div class="pull-right">
                <a href="javascript:history.back()" class="btn btn-secondary mr-2">Voltar</a>
            </div>
            
            @if ($pedido->status === 'aguardando' ) 
                <form id="remove" action="{{ route('adm.solicitacoes.membros.update', $pedido_id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="status" value="confirmado">
                        <button type="submit" class="btn btn-success mr-2"><span>conf. pagto manual</span></button>
                </form>
                <form id="remove" action="{{ route('adm.solicitacoes.membros.update', $pedido_id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="status" value="cancelado">
                        <button type="submit" class="btn btn-success"><span>Cancelar pedido</span></button>
                </form>
            @else
                <form id="remove" action="{{ route('adm.solicitacoes.membros.update', $pedido_id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="auditado" value="1">
                        <input type="hidden" name="ativo" value="1">
                        <button type="submit" class="btn btn-success mr-2"><span>Ativar Inscrição</span></button>
                </form>
                <form id="remove" action="{{ route('adm.solicitacoes.membros.update', $pedido_id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="auditado" value="2">
                        <input type="hidden" name="ativo" value="0">
                        <button type="submit" class="btn btn-danger"><span>Recusar</span></button>
                </form>
            @endif
        </div>
    </div>
</div>
<div class="row consulta-perfil">
    @include('../adm/_include/contentShowMembro')
</div>   


@endsection
