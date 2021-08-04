@extends('layouts.app')

@section('content')

    <main class="main-form-buscar-inscrito">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="form-title flex-column mb-5 text-center font-weight-bold">
                    <h2>Consulta de membros</h2>
                    <p class="d-flex align-items-center justify-content-center">
                        Esta é uma consulta pública
                    </p>
                </div>
            </div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="d-block w-100">Digite o CPF ou Nº de Registro CFEP para pesquisar</label>
                        <input type="text" name="EntradaTecladoCpfww" id="EntradaTecladoCpfww" class="form-control"
                            placeholder="000.000.000-00 ou 00.000.000" />
                    </div>
                    <div class="form-group col-md-2 col-sm-12 d-flex flex-column justify-content-end">
                        <button type="submit" class="btn btn-primary" id="btn-pesquisar-membro">Pesquisar</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@section('footer')
    @include('partials.footer')
@show
@endsection

{{-- <div class="perfil">
<ul><img src="https://intranet.oabsp.org.br/oabsp/apps/inscricoes/imagens/Fotos/87/F05789923887.GIF" border="0">
    <li><span>JOSE ABDALA</span></li>
    <li><span>OABSP nº: </span>75699 - Definitivo</li>
    <li><span>Data Inscrição: </span>19/10/1984</li>
    <li><span>Subseção: </span>São Paulo</li>
    <li><span>Situação: </span>Ativo - Normal</li>
</ul>
</div> --}}
