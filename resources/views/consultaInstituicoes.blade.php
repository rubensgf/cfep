@extends('layouts.site')

@section('content')

<div class="table-responsive">
    <h2><i class="octicon octicon-globe icone"></i> Instituições credenciadas CFEP</h2>
    <h6>Buscar por nome</h6>
    <form onsubmit="mostrarEntidades(); return false;" class="mb-3">
    <div class="input-group">
        <input id="nome" type="text" class="form-control" name="nome">
        <div class="input-group-btn">
            <button class="btn btn-primary"  type="submit">Pesquisar</button>
        </div>
        </div>
    </form>
</div>

@endsection
