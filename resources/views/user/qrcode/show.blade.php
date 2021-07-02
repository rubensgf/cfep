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
                    <h1 class="h2">Detalhes - Entidades</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                              <form id="remove" action="{{ route('adm.entidade.update',  $entidade->id ) }}" method="post" onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @if ( $entidade->status == 'I')
                                    <input type="hidden" name="status" value="A">
                                    <button type="submit" class="btn btn-success"><span>Ativar</span></button>
                                @else
                                    <input type="hidden" name="status" value="I">
                                    <button type="submit" class="btn btn-danger"><span>Bloquear</span></button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>

              <!--  <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <h2>Section title</h2>-->
                <div class="table-responsive">
                    {{ $entidade->razaoSocial }} <br>
                    {{ $entidade->nomeFantasma }} <br>
                    {{ $entidade->webSite }} <br>
                    {{ $entidade->cnpj }} <br>
                    {{ $entidade->endereco }} <br>
                    {{ $entidade->numero }} <br>
                    {{ $entidade->complemento }} <br>
                    {{ $entidade->cep }} <br>
                    {{ $entidade->bairro }} <br>
                    {{ $entidade->cidade }} <br>
                    {{ $entidade->uf }} <br>
                    {{ $entidade->email }} <br>
                    {{ $entidade->telefone }} <br>
                    {{ $entidade->situacaoCadastro }} <br>
                    {{ $entidade->nomeCompleto }} <br>
                    {{ $entidade->sexo }} <br>
                    {{ $entidade->rg }} <br>
                    {{ $entidade->cpf }} <br>
                    {{ $entidade->expedido }} <br>
                    {{ $entidade->validade }} <br>
                    {{ $entidade->status }}
</div>
            </main>




@endsection
