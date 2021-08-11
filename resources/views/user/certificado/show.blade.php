@extends('layouts.adm')

@section('content')

    <div data-download-pdf class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 mb-5 border-bottom">
        <h1 class="h2">Certificado CFEP</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="A">
                <button type="button" class="btn btn-primary" data-certificado-pdf><span>Baixar PDF</span></button>
            </div>
        </div>
    </div>

    {{-- <div class="row consulta-perfil">
        <div class="box-certificado border" style="width: 2480px; height: 3508px">

            <h1 style="font-size: 32px">Fulano de Tal da Silva de Melo Dias</h1>

        </div>
    </div> --}}

@endsection




{{-- @extends('layouts.adm')

@section('content')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Certificado</h1>

        </div>
        @if(!$dados)
        <div class="table-responsive">

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
        </div>
        @endif
    </main>




@endsection --}}
