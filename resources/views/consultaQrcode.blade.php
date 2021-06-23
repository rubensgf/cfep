@extends('layouts.site')

@section('content')
    <center>
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
    </center>
</div>

@endsection
