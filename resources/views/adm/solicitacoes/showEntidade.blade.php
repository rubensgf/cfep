@extends('layouts.adm')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
    <h1 class="h2">Detalhes - Parcerias Nº </h1>

    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <div class="pull-right">
                <a href="javascript:history.back()" class="btn btn-secondary mr-2">Voltar</a>
            </div>
            <form id="remove" action="{{ route('adm.solicitacoes.entidades.update', $entidade->id) }}" method="post"
                onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @if ($entidade->ativo == '0')
                    <input type="hidden" name="ativo" value="1">
                    <button type="submit" class="btn btn-success"><span>Ativar</span></button>
                @else
                    <input type="hidden" name="ativo" value="2">
                    <button type="submit" class="btn btn-danger"><span>Bloquear</span></button>
                @endif
            </form>
        </div>
    </div>
</div>
<div class="row consulta-perfil">
    @include('../adm/_include/contentShowEntidade')
</div>   


@endsection
