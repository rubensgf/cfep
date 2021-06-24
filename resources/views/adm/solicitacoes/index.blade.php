@extends('layouts.adm')

@section('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Solicitações - novo membros/parceiros/2 via</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                    </div>
                </div>

              <!--  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <h2>Section title</h2>-->
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th>Nome</th>
                           <th>Telefone</th>
                        <th>Situação</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($membros as $i)

                            <tr>
                                <td>{{ $i->nome }}<br>{{ $i->email }}</td>

                                <td>{{ $i->fone }}</td>
                                <td>{{ $i->situacao }}</td>
                                <td><a class="btn btn-success" href="{{ route('adm.solicitacoes.show',$i->id) }}">ver</a></td>

                            </tr>
                        @endforeach
                    </table>
                </div>
                </main>


@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('dist/js/jquery-te-1.4.0.min.js') }}" charset="utf-8"></script>

@endsection
