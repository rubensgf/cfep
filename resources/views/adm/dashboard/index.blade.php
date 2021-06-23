@extends('layouts.adm')

@section('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <div class="table-responsive">
                    <h5>Membros:</h5>
                    <p>Ativos: {{ $m_ativos }}</p>
                    <p>Pendente: {{ $m_pendentes}}</p>
                    <p>Inativos: {{ $m_inativos }}</p>
                    <br>
                    <h5>Entidades:</h5>
                    <p>Ativos: {{ $e_ativos }}</p>
                    <p>Inativos: {{ $e_inativos}}</p>
                    <br>
                    <p></p>

                </div>
                </main>


@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('dist/js/jquery-te-1.4.0.min.js') }}" charset="utf-8"></script>

@endsection
