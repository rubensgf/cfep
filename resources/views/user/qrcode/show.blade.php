@extends('layouts.adm')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
        <h1 class="h2">QrCode</h1>

        {{-- <div class="btn-toolbar mb-2 mb-md-0">
            <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="A">
                <button type="button" class="btn btn-primary"><span>Baixar PDF</span></button>
            </div>
        </div> --}}
    </div>


    <div class="table-responsive">
        {{ $dados->foto }} <br>
        {{ $dados->user_id }} <br>
        {{ $dados->ncarteirinha }} <br>
        {{ $dados->nome }} <br> {{ $dados->nome_mae }} <br>
        {{ $dados->nome_pai }} <br> {{ $dados->sexo }} <br>
        {{ $dados->data_nascimento }} <br>
        {{ $dados->rg }} <br>
        {{ $dados->cpf }} <br>
        {{ $dados->telefone }} <br>
        {{ $dados->celular }} <br>
        {{ $dados->endereco }} <br>
        {{ $dados->numero }} <br>
        {{ $dados->cidade }} <br>
        {{ $dados->uf }} <br>
        {{ $dados->cep }} <br>
        {{ $dados->foto }} <br>
        {{ $dados->expedido }} <br>
        {{ $dados->vigencia }} <br>
        {{ $dados->ativo }} <br>
    </div>

@endsection
