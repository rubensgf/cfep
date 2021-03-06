@extends('layouts.adm')

@section('content')
    <div class="form-row justify-content-between flex-wrap flex-md-nowrap align-items-center py-3 mb-5 border-bottom">
        <h2 class="mb-md-0">Solicitações - Inscritos, 2ª Via e Parceiros</h2>
        <!--<div class="pull-right">
            <a href="javascript:history.back()" class="btn btn-outline-secondary mr-2">Voltar</a>
        </div>-->
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

    @if ($pedidos)
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tipo</th>
                        <th>Nome / Email</th>
                        <th>Valor</th>
                        <th>Dt. Solicitação</th>
                        <th>Pagamento</th>
                        <th>Situação</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody data-filter-table>
                    @foreach ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->id }}</td>
                            <td>{{ $pedido->produto }} </td>
                            <td>
                                {{ $pedido->nome }} <br>
                                {{ $pedido->email }} 
                            </td>
                            <td>{{ $pedido->valor }} </td>
                            <td>{{ $pedido->created_at }}</td>
                            <td>{{ $pedido->status }}</td>
                            <td>{{ $pedido->situacao }}</td>
                            <td>
                                @if ($pedido->produto_id === '1' ) 
                                    <a class="btn btn-primary" href="{{ route('adm.solicitacoes.membros', $pedido->id) }}">ver</a>
                                @else
                                    <a class="btn btn-primary" href="{{ route('adm.solicitacoes.show', $pedido->id) }}">ver</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    @foreach ($entidades as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>Parcerias</td>
                            <td>{{ $e->nome }} </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>{{ $e->ativo == '0' ? 'aguardando' : '' }}</td>                    
                            <td><a class="btn btn-primary" href="{{ route('adm.solicitacoes.entidades', $e->id) }}">ver</a></td>        
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <hr>
        <div class="row justify-content-center my-5 bg-white">
            <div class="col text-center font-weight-bold mt-3">
                <p>Nenhuma solicitação encontrada</p>
            </div>
        </div>
    @endif
@endsection
