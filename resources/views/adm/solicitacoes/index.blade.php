@extends('layouts.adm')

@section('content')
    <div class="form-row justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-5 border-bottom">
        <h2 class="mb-md-0">Solicitações (Novos inscritos, 2ª via)</h2>
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
                    <th>Nº inscrição</th>
                    <th>Nome / Email</th>
                    <th>Telefone</th>
                    <th>Situação</th>
                    <th></th>
                </tr>
            </thead>
            <tbody data-filter-table>
                @foreach ($membros as $membro)
                    <tr>
                        <td>{{ $membro->id }}</td>
                        <td>
                            {{ $membro->nome }}<br>
                            {{ $membro->email }}
                        </td>
                        <td>{{ $membro->fone }}</td>
                        <td>{{ $membro->situacao }}</td>
                        <td><a class="btn btn-primary" href="{{ route('adm.solicitacoes.show', $membro->id) }}">ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
