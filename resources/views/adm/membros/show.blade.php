@extends('layouts.adm')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
        <h1 class="h2">Detalhes do inscritos Nº{{ $membro->id }}</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <div class="pull-right">
                    <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2">Voltar</a>
                </div>
                <form id="remove" action="{{ route('adm.membros.update', $membro->id) }}" method="post"
                    onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                    
                    @if ($user->ativo === '1')
                        <input type="hidden" name="ativo" value="0">
                        <button type="submit" class="btn btn-danger"><span>Inativar Inscrição</span></button>
                    @else
                        <input type="hidden" name="ativo" value="1">
                        <button type="submit" class="btn btn-success mr-2"><span>Ativar Inscrição</span></button>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <div class="row consulta-perfil">
        @include('../adm/_include/contentShowMembro')
    </div>  
@endsection
