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
                            <button type="submit" class="btn btn-danger"><span>Cancelar pedido</span></button>
                    </form>
                @else
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $pedido->id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="situacao" value="grafica">
                            <button type="submit" class="btn btn-warning"><span>gráfica</span></button>
                    </form>
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $pedido->id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="situacao" value="enviado">
                            <button type="submit" class="btn btn-warning"><span>enviado</span></button>
                    </form>
                    <form id="remove" action="{{ route('adm.solicitacoes.update', $pedido->id) }}" method="post"
                        onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="hidden" name="situacao" value="finalizado">
                            <button type="submit" class="btn btn-warning"><span>Entregue</span></button>
                    </form>
                @endif    
            </div>
        </div>
    </div>

    <div class="col-md-3">
        @if ($membro->foto)
            <img class="foto-img img-fluid border mb-4"
                src="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $membro->foto }}">
        @else
            <div class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
                <small>Sem Foto</small>
            </div>
        @endif
    </div>
    
    <ul class="col-md-9 p-0">
        <li class="mb-3"><span class="font-weight-bold fs-22">{{ $membro->nome }}</span></li>
    
        {{-- <li>token transacao : <span>{{ env('LINK_REDIRECT')}}/{{ $pedido->token }}</span></li> --}}
    
        <fieldset class="p-3 mb-3">
            <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>
    
            <li>ref. pedido : <span>{{ $pedido->referencia }}</span></li>
            <li>token transacao : <span>{{ $pedido->token }}</span></li>
    
            <li>N° inscrição: <span>{{ $membro->ncarteirinha }}</span></li>
            <li>Expedido: <span>{!! date('d/m/Y', strtotime($membro->expedido)) !!}</span></li>
            <li>Validade: <span>{!! date('d/m/Y', strtotime($membro->vigencia)) !!}</span></li>
            <li>Auditado: <span>{{ $membro->auditado ? 'Sim' : 'Não' }}</span></li>
            <li>Situação: <span>{{ $membro->ativo ? 'Ativo' : 'Inativo'}}</span></li>

            {{-- <li>Status:
                @if ($user->ativo === '1') <span>Ativo</span>
                @elseif($user->ativo === '2') <span>Bloqueado</span>
                @elseif($user->ativo === '3') <span>Cancelado</span>
                @endif
            </li> --}}
        </fieldset>
    
        <fieldset class="p-3 mb-3">
            <legend class="w-auto m-0 fs-20">Dados pessoais</legend>
    
            <li>Nome: <span>{{ $membro->nome }}</span></li>
            <li>Mãe: <span>{{ $membro->nome_mae }}</span></li>
            <li>Pai: <span>{{ $membro->nome_pai }}</span></li>
            <li>Nascimento: <span>{{ $membro->data_nascimento }}</span></li>
            <li>Sexo: <span>{{ $membro->sexo }}</span></li>
            <li>RG: <span>{{ $membro->rg }}</span></li>
            <li>CPF: <span>{{ $membro->cpf }}</span></li>
            <li>Doador de órgãos e tecidos: <span>{{ $membro->doador ? 'Sim' : 'Não' }}</span></li>
            <li>Via: <span>{{ $membro->numero_vias }}ª</span></li>
            
            <li>CEP: <span>{{ $membro->cep }}</span></li>
            <li>Endereço: <span>{{ $membro->endereco }}, {{ $membro->numero }}</span></li>
            <li>Cidade: <span>{{ $membro->cidade }}</span></li>
            <li>UF: <span>{{ $membro->uf }}</span></li>
    
            {{-- <li>E-mail: <span> {{ $user->email }}</span></li> --}}
            <li>Telefone: <span>{{ $membro->telefone }} / {{ $membro->celular }}</span></li>
        </fieldset>
        {{-- <fieldset class="p-2 mb-2">
                    <legend class="w-auto m-0 fs-20">Graduação</legend>
    
                    <li>Graduação: <span>{{ $membro->graduacao }}</span></li>
                    <li>Universidade: <span>{{ $membro->universidade }}</span></li>
                    <li>Data Formação: <span>{{ $membro->dataFormacao }}</span></li>
    
                </fieldset> --}}
        {{-- <fieldset class="p-3 mb-3">
            <legend class="w-auto m-0 fs-20">Documentação</legend>
            <li>
                <span>Ficha </span>
                <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->ficha }}">Baixar</a>
            </li>
            <li>
                <span>Diploma </span>
                <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->diploma }}">Baixar</a>
            </li>
            <li>
                <span>Diploma verso </span>
                <a
                    href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->diploma_verso }}">Baixar</a>
            </li>
            <li>
                <span>RG </span>
                <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->rg }}">Baixar</a>
            </li>
            <li>
                <span>CPF </span>
                <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->cpf }}">Baixar</a>
            </li>
            <li>
                <span>Título </span>
                <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->titulo }}">Baixar</a>
            </li>
            <li>
                <span>Comprovante </span>
                <a
                    href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->comprovante }}">Baixar</a>
            </li>
        </fieldset> --}}
    </ul>
@endsection
