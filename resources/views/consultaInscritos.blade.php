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
        <form id="enviar" onsubmit="return validar();" action="funcao/listarMembroFora.php" class="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="d-block w-100">Digite o CPF ou Nº de Registro CFEP para pesquisar</label>
                    <input type="text" name="EntradaTecladoCpf" id="EntradaTecladoCpf"
                        class="form-control" placeholder="000.000.000-00 ou 00.000.000"/>
                </div>
                <div class="form-group col-md-2 col-sm-12 d-flex flex-column justify-content-end">
                    <button type="submit" class="btn btn-primary" name="pesquisarMembro" id="pesquisarMembro">Pesquisar</button>
                </div>
            </div>
        </form>
    </div>
</main>
@section('footer')
    @include('partials.footer')
@show
@endsection
