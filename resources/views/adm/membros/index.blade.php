@extends('layouts.adm')

@section('content')

    <div class="form-row justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-5 border-bottom">
        <h2 class="mb-md-0">Membros</h2>

        <div class="pull-right">
            <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2">Voltar</a>
            <a href="{{ route('inscricao') }}" type="button" class="btn btn-success" title="Cadastrar novo membro">+
                Cadastrar</a>
        </div>
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

    @if ($membros)
        <div data-table class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nº </th>
                        <th>Nome / Email</th>
                        <th>Telefone</th>
                        <th>Vigência</th>
                        <th>Auditado </th>
                        <th>Status </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody data-filter-table>
                    @foreach ($membros as $membro)
                        <tr>
                            <td>{{ $membro->ncarteirinha }}</td>
                            <td>
                                {{ $membro->nome }}<br>
                                {{ $membro->email }}
                            </td>
                            <td>{{ $membro->telefone }}</td>
                            <td>{!! date('d/m/Y', strtotime($membro->vigencia)) !!}</td>
                            <td>{{ $membro->auditado ? 'Sim' : 'Não' }}</td>
                            <td>{{ $membro->ativo ? 'Ativo' : 'Inativo' }}</td>
                            <td><a class="btn btn-primary" href="{{ route('adm.membros.show', $membro->id) }}">Ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <hr>
        <div class="row justify-content-center my-5 bg-white">
            <div class="col text-center font-weight-bold mt-3">
                <p>Nenhum membro encontrado</p>
            </div>
        </div>
    @endif

@endsection
