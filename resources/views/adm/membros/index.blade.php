@extends('layouts.adm')

@section('content')

    <div class="form-row justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-5 border-bottom">
        <h2 class="mb-md-0">Membros</h2>
        <div class="pull-right">
            <a href="javascript:history.back()" class="btn btn-secondary mr-2">Voltar</a>
        </div>
       <!-- <a href="{{ route('adm.membros.create') }}" type="button" class="btn btn-success"
            title="Cadastrar novo membro">+ Cadastrar</a>-->
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
                    <th>Nº </th>
                    <th>Nome / Email</th>
                    <th>Telefone</th>
                    <th>Vigência</th>
                    <th>Auditado <th>
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
                        <td>{{ $membro->vigencia }}</td>
                        <td>{{ $membro->auditado == '0' ? 'Não' : 'Sim' }}</td>


                        <td><a class="btn btn-primary" href="{{ route('adm.membros.show', $membro->id) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
