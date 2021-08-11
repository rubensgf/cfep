@extends('layouts.adm')

@section('content')


        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Detalhes - Carteirinha</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <form id="remove" action="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="status" value="A">
                        <button type="submit" class="btn btn-success"><span>Solicitar 2° via </span></button>

                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="table-responsive">

            {{ $dados->foto }} <br>
            {{ $dados->id }} <br>
            {{ $dados->nome }} <br>
            {{ $dados->nomeM }} <br>
            {{ $dados->nomeP }} <br>
            {{ $dados->dataNasc }} <br>
            {{ $dados->sexo }} <br>
            {{ $dados->rg }} <br>
            {{ $dados->cpf }} <br>
            {{ $dados->endereco }} <br>
            {{ $dados->uf }} <br>
            {{ $dados->foneF }} <br>
            {{ $dados->fone }} <br>
            {{ $dados->email }} <br>
            {{ $dados->expedido }} <br>
            {{ $dados->validade }} <br>
            {{ $dados->situacao }} <br>
            {{ $dados->graduacao }} <br>
            {{ $dados->universidade }} <br>
            {{ $dados->dataFormacao }} <br>
            {{ $dados->observacao }} <br>
        </div> --}}

@endsection
