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
                    <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2">Voltar</a>
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

    <div class="row consulta-perfil">
        @include('../adm/_include/contentShowEntidade')
    </div>   
@endsection
