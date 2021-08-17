@extends('layouts.adm')

@section('content')

    <div 
        data-download-pdf 
        data-name="{{ $dados->nome }}"
        data-cpf="{{ $dados->cpf }}"
        data-inscricao="{{ $dados->ncarteirinha }}"
        data-expedido="{{ $dados->expedido }}"
        class="d-flex justify-content-between flex-wrap 
        flex-md-nowrap align-items-center 
        py-2 px-3 mb-5 border-bottom"
    >
        <h1 class="h2">Certificado CFEP</h1>

        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="row">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="A">
                <div class="pull-right">
                    <a href="javascript:history.back()" class="btn btn-secondary mr-1">Voltar</a>
                </div>
                <button type="button" class="btn btn-primary" data-certificado-pdf><span>Baixar PDF</span></button>
            </div>
        </div>
    </div>

    <div class="box-certificado" title="Para fazer download do certifido, clique no botão 'Baixar'">
        <div class="certificado">
            <div class="row name-row">
                <div class="col">
                    <p>{{ $dados->nome }}</p>
                </div>
            </div>

            <div class="row text-row">
                <div class="col">
                    <p>portador do CPF Nº {{ $dados->cpf }}, obteve inscrição de Nº {{ $dados->ncarteirinha }} no quadro</p>
                    <p>de educadores e pedagogos do Conselho Federal de Educadores e Pedagogos.</p>
                </div>
            </div>

            <div class="row expedido-row">
                <div class="col text-right">
                    <p>Inscrito em {{ $dados->expedido }}.</p>
                </div>
            </div>

        </div>
    </div>

    {{-- <div>
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
</div> --}}
</div>

@endsection


