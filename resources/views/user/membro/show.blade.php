@extends('layouts.adm')

@section('content')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Perfil</h1>

                </div>


                <h2>Section title</h2>
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
            </main>




@endsection
