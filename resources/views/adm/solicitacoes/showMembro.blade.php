@extends('layouts.adm')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
    <h1 class="h2">Detalhes - solicitação  Nº{{ $membro->id }} </h1>

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <div class="pull-right">
                <a href="javascript:history.back()" class="btn btn-secondary mr-2">Voltar</a>
            </div>
            <form id="remove" action="{{ route('adm.solicitacoes.membros.update', $pedido_id) }}" method="post"
                onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <input type="hidden" name="auditado" value="1">
                    <input type="hidden" name="ativo" value="1">
                    <button type="submit" class="btn btn-success"><span>Confirmar dados</span></button>
            </form>
            <form id="remove" action="{{ route('adm.solicitacoes.membros.update', $pedido_id) }}" method="post"
                onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    <input type="hidden" name="auditado" value="2">
                    <input type="hidden" name="ativo" value="0">
                    <button type="submit" class="btn btn-danger"><span>Bloquear</span></button>
            </form>
        </div>
    </div>
</div>
<div class="row consulta-perfil">
    @include('../adm/_include/contentShowMembro')
</div>   


@endsection
