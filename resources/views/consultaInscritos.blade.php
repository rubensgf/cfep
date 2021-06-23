@extends('layouts.site')

@section('content')
    <div class="table-responsive">
        <h2><span class="glyphicon glyphicon-user"></span> Membros CFEP</h2><br/>
        <strong >Consulta de Membros - CFEP</strong><br/>
        <span >Informe abaixo o CPF ou o Registro CFEP do inscrito.</span><br/>
        <form id="enviar" onsubmit="return validar();" action="funcao/listarMembroFora.php" class="container" style="width: 400px">
            <input type="text" name="EntradaTecladoCpf" id="EntradaTecladoCpf" class="form-control text-center"/>
            <br>
            <input type="submit" class="btn btn-success" name="pesquisarMembro" id="pesquisarMembro" value="Pesquisar" />
        </form>
</div>

@endsection
