@extends('layouts.adm')

@section('content')
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
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
                    <th>Id</th>
                        <th>Nome / Email</th>
                        <th>Produto / valor</th>
                        <th>Cod. payment</th>
                        <th>Cod. transação</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody data-filter-table>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->nome }}</td>
                            <td>{{ $pedido->produto_id }} - {{ $pedido->valor }} </td>
                            <td>{{ $pedido->code_payment }}</td>
                            <td>{{ $pedido->transaction_id }}</td>
                            <td>{{ $pedido->status }}</td>
                            <td><a class="btn btn-primary" href="{{ route('adm.solicitacoes.show', $pedido->id) }}">ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
@endsection


