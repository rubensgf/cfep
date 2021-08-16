@extends('layouts.adm')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center p-3 mb-3 border-bottom">
        <h1 class="h2">Indentidade Profissional</h1>

        <div class="btn-group">
            <div class="pull-right">
                <a href="javascript:history.back()" class="btn btn-secondary mr-1">Voltar</a>
            </div>
            <form id="remove" action="">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="status" value="A">
                {{-- <button type="submit" class="btn btn-success"><span><a href="{{ route('2via', $dados->id) }}">Solicitar 2° via</a> </span></button> --}}
                {{-- <button type="button" class="btn btn-primary">Baixar</button> --}}
                <button type="submit" class="btn btn-primary">Solicitar 2° via</button>
            </form>
        </div>
    </div>
    <label class="flip-container">
        <input type="checkbox"/>
        <div class="container box-carteira my-5">
            <div class="carteira carteira__verso back">
                <div class="row info-membro">
                    <div class="col-9">
                        <label>Nome</label>
                        <p>{{ $dados->nome }}</p>
                    </div>
                    <div class="col-3">
                        <label>Data de nascimento</label>
                        <p>{{ $dados->data_nascimento}}</p>
                    </div>
                </div>
                <div class="row info-membro">
                    <div class="col-9">
                        <label>Filiação</label>
                        <p>{{ $dados->nome_mae }}</p>
                        <p>{{ $dados->nome_pai }}</p>
                    </div>
                    <div class="col-3">
                        <label>CPF</label>
                        <p>{{ $dados->cpf }}</p>
                    </div>
                </div>
                <div class="row info-membro">
                    <div class="col-9">
                        <label>Naturalidade</label>
                        <p>São Paulo - SP</p>
                    </div>
                    <div class="col-3">
                        <label>Expedido</label>
                        <p>{{ $dados->expedido }}</p>
                    </div>
                </div>
                <div class="row info-membro">
                    <div class="col-9">
                        <label>RG</label>
                        <p>{{ $dados->rg }}</p>
                    </div>
                    <div class="col-3">
                        <label>Validade</label>
                        <p>{{ $dados->vigencia}}</p>
                    </div>
                </div>
                <div class="row info-membro">
                    <div class="col-9">
                        <label>Doador de orgãos e tecidos</label>
                        <p>Sim</p>
                    </div>
                    <div class="col-3">
                        <label>Via</label>
                        <p>2ª</p>
                    </div>
                </div>
            </div>
            <div class="carteira carteira__frente front">
                <div class="row info-membro">
                    <div class="col justify-content-end align-items-start pt-1">
                        <p>Registro CFEP Nº {{ $dados->ncarteirinha }}</p>
                    </div>
                </div>
                <div class="row info-membro">
                    <div class="col col-4">
                        <img src="/images/fotos-membros/{{ $dados->foto }}" alt="">
                        {{-- <div class="img-test">foto</div> --}}
                    </div>
                    <div class="col col-4 justify-content-center pb-3">
                        <p>img assinatura</p>
                    </div>
                    <div class="col col-4 justify-content-end">
                        <div style="width: 80px; background-color: #fff"></div>
                    </div>
                </div>
            </div>
        </div>
    </label>
@endsection


    {{-- {{ $dados->foto }} <br>
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
    {{ $dados->ativo }} <br> --}}