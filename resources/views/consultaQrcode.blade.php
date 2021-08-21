@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="form-title flex-column mb-5 text-center font-weight-bold">
                <h2>Consulta de Inscritos - QRCode</h2>
                <p class="d-flex align-items-center justify-content-center">
                    Esta é uma consulta pública
                </p>
            </div>
        </div>
        <div data-search-public class="consulta-inscrito">
            {{-- <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="d-block w-100">Digite o CPF ou Nº de Registro CFEP</label>
                    <input type="number" data-term-search class="form-control" placeholder="Digite apenas números" />
                    <span class="is-hidden" data-msg-error>Valor digitado é inválido</span>
                </div>
                <div class="form-group col-md-2 col-sm-12 d-flex flex-column justify-content-end">
                    <button type="button" class="btn btn-primary" data-btn-search>Pesquisar</button>
                </div>
            </div> --}}

            <div class="box-aviso row w-auto my-4 px-3">
                <div class="col-md-8 py-2">
                    <p class="font-weight-bold mb-1">IMPORTANTE:</p>
                    <p class="mb-0">O teor desta consulta é meramente informativo.<br>
                        Caso seja constatada qualquer divergência de dados, solicitamos a gentileza de entrar em contato
                        conosco <a href="mailto:contato@cfep.org.br">(contato@cfep.org.br)</a>, ou através do telefone (11)
                        3360-5181</p>
                </div>
            </div>
     
            <div data-loader-gift class="row justify-content-center my-5 is-hidden">
                <img src="/images/gif/loader-blue.gif" width="40">
            </div>
            @foreach ($membro as $i)
                <div data-box-result-search class="">
                    <div class="row justify-content-center my-4">
                        <div class="form-title flex-column text-center font-weight-bold mt-3">
                            <h2>Resultado</h2>
                        </div>
                    </div>

                    <div class="row consulta-perfil bg-white p-4">
                        <div class="col-md-3 d-flex justify-content-center">
                            @if ($i->fotowww)
                                <img data-search="foto" class="mb-4 mb-md-0 foto-img img-fluid border" src="{{url('/storage/files/')}}/{{ $i->ncarteirinha }}/{{ $i->foto }}">
                            @else
                                <div
                                    class="foto-img mb-4 mb-md-0 img-fluid border d-flex justify-content-center align-items-center">
                                    <small>Sem Foto</small>
                                </div>
                            @endif
                        </div>

                        <ul class="col-md-9 p-2">
                            <li class="mb-3">
                                <span class="font-weight-bold" data-search="nome">{{ $i->nome}}</span>
                            </li>
                            <li>Nº inscrição:
                                <span data-search="id">{{ $i->ncarteirinha }}</span>
                            </li>
                            <li>Expedido:
                                <span data-search="expedido">{{ $i->expedido}}</span>
                            </li>
                            <li>Validade:
                                <span data-search="validade">{{ $i->vigencia}}</span>
                            </li>
                            <li>Situação:
                                <span data-search="situacao">{{ $i->ativo ? 'Regular' : 'Irregular'}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach

            {{-- <div data-box-result-search-fail class="is-hidden px-3">
                <div class="row justify-content-center my-5 bg-white">
                    <div class="form-title flex-column text-center font-weight-bold mt-3">
                        <p>Nenhum resultado encontrado. Verifique o valor digitado.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
