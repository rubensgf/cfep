@extends('layouts.adm')

@section('content')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Perfil</h1>
                </div>
                <div class="table-responsive">

                @foreach ($dados as $i)
                    {{ $i->foto }} <br>
                    {{ $i->user_id }} <br>
                    {{ $i->ncarteirinha }} <br>
                    {{ $i->nome }} <br> {{ $i->nome_mae }} <br>
                    {{ $i->nome_pai }} <br>         {{ $i->sexo}} <br>
                    {{ $i->data_nascimento}} <br>
                    {{ $i->rg }} <br>
                    {{ $i->cpf}} <br>
                    {{ $i->telefone }} <br>
                    {{ $i->celular}} <br>
                    {{ $i->endereco }} <br>
                    {{ $i->numero}} <br>
                    {{ $i->cidade }} <br>
                    {{ $i->uf}} <br>
                    {{ $i->cep }} <br>
                    {{ $i->foto}} <br>
                    {{ $i->expedido }} <br>
                    {{ $i->vigencia}} <br>
                    {{ $i->ativo }} <br>
                    {{$i->email }} <br>
                @endforeach

</div>
            </main>




@endsection
