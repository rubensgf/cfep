@extends('layouts.adm')

@section('content')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">QrCode</h1>
                </div>
                <div class="table-responsive">
                {{ $dados->foto }} <br>
    {{ $dados->user_id }} <br>
    {{ $dados->ncarteirinha }} <br>
    {{ $dados->nome }} <br> {{ $dados->nome_mae }} <br>
    {{ $dados->nome_pai }} <br>         {{ $dados->sexo}} <br>
    {{ $dados->data_nascimento}} <br>
    {{ $dados->rg }} <br>
    {{ $dados->cpf}} <br>
    {{ $dados->telefone }} <br>
    {{ $dados->celular}} <br>
    {{ $dados->endereco }} <br>
    {{ $dados->numero}} <br>
    {{ $dados->cidade }} <br>
    {{ $dados->uf}} <br>
    {{ $dados->cep }} <br>
    {{ $dados->foto}} <br>
    {{ $dados->expedido }} <br>
    {{ $dados->vigencia}} <br>
    {{ $dados->ativo }} <br>
        </div>
            </main>

@endsection
