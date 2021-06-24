@extends('layouts.adm')

@section('content')
    <!---<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Detalhes -  </h3>
            </div>
            <div class="pull-right">
              <a href="javascript:history.back(-1)" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Voltar </a>
            </div>
        </div>
    </div>-->

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Detalhes - solicitação</h1>
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
                {{ $membro->nome }}<br>
                {{ $membro->foto }}<br>
        {{ $membro->id}}<br>
        {{ $membro->nome}}<br>
        {{ $membro->nomeM}}<br>
        {{ $membro->nomeP}}<br>
        {{ $membro->dataNasc}}<br>
        {{ $membro->sexo}}<br>
        {{ $membro->rg}}<br>
        {{ $membro->cpf}}<br>
        {{ $membro->endereco}}<br>
        {{ $membro->uf}}<br>
        {{ $membro->foneF}}<br>
        {{ $membro->fone}}<br>
        {{ $membro->email}}<br>
        {{ $membro->expedido}}<br>
        {{ $membro->validade}}<br>
        {{ $membro->situacao}}<br>
        {{ $membro->graduacao}}<br>
        {{ $membro->universidade}}<br>
        {{ $membro->dataFormacao}}<br>
        {{ $membro->observacao }}
                </div>
            </main>




@endsection
