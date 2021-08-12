@extends('layouts.adm')

@section('content')
    <div class="form-row justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-5 border-bottom">
        <h2 class="mb-md-0">Entidades</h2>
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

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Razão Social / Site</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody data-filter-table>
                @foreach ($entidades as $entidade)
                    <tr>
                        <td>
                            {{ $entidade->razaoSocial }}<br>
                            {{ $entidade->webSite }}
                        </td>
                        <td>{{ $entidade->cnpj }}</td>
                        <td>{{ $entidade->fone }}</td>
                        <td>{{ $entidade->status }}</td>
                        <td><a class="btn btn-primary" href="{{ route('adm.entidade.show', $entidade->id) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
