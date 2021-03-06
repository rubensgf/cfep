@extends('layouts.adm')

@section('content')
    <div class="form-row justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-5 border-bottom">
        <h2 class="mb-md-0">Entidades</h2>
        <!--<div class="pull-right">
            <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2">Voltar</a>
        </div>-->
        <a href="{{ route('adm.entidade.create') }}" type="button" class="btn btn-success" title="Cadastrar novo membro">+
            Cadastrar</a>
    </div>

    <div class="form-row justify-content-end">
        <div class="col-md-6 input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    @include('icons.icon-search')
                </span>
            </div>
            <input class="form-control" data-filter-table type="text" placeholder="Digite para filtrar"
                aria-label="Digite para filtrar" aria-describedby="basic-addon1">
        </div>
    </div>

    @if ($entidades)
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Razão Social / Site</th>
                        <th>CNPJ</th>
                        <th>Nome/celular</th>
                        <th>Ativo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody data-filter-table>
                    @foreach ($entidades as $entidade)
                        <tr>
                            <td>
                                {{ $entidade->razao_social }}<br>
                                {{ $entidade->site }}
                            </td>
                            <td>{{ $entidade->cnpj }}</td>
                            <td>{{ $entidade->nome }}<br>{{ $entidade->celular }}</td>
                            <td>{{ $entidade->ativo == '0' ? 'Não' : 'Sim' }}</td>
                            <td><a class="btn btn-primary" href="{{ route('adm.entidade.show', $entidade->id) }}">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <hr>
        <div class="row justify-content-center my-5 bg-white">
            <div class="col text-center font-weight-bold mt-3">
                <p>Nenhuma entidade encontrada</p>
            </div>
        </div>
    @endif

@endsection
