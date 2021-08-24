<div class="col-md-3">
    {{-- @if ($membro->foto)
        <img class="foto-img img-fluid border mb-4"
            src="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $membro->foto }}">
    @else --}}
        <div class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
            <small>Sem Foto</small>
        </div>
    {{-- @endif --}}
</div>

<ul class="col-md-9 p-0">
    <li class="mb-3"><span class="font-weight-bold fs-22">{{ $entidade->nome_fantasia }}</span></li>

    <fieldset class="p-3 mb-3">
        <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

        {{-- <li>ref. pedido : <span>{{ $pedido->referencia }}</span></li> --}}
        {{-- <li>token transacao : <span>{{ $pedido->token }}</span></li> --}}

        <li>N° inscrição: <span>{{ $entidade->id }}</span></li>
        <li>Expedido: <span>{!! date('d/m/Y', strtotime($entidade->expedido)) !!}</span></li>
        <li>Validade: <span>{!! date('d/m/Y', strtotime($entidade->vigencia)) !!}</span></li>
        {{-- <li>Auditado: <span>{{ $entidade->auditado ? 'Sim' : 'Não' }}</span></li> --}}
        <li>Status:
            @if ($entidade->ativo === '0') <span>Aguardando</span>
            @elseif($entidade->ativo === '1') <span>Ativo</span>
            @elseif($entidade->ativo === '2') <span>Bloqueado</span>
            @endif
        </li>
    </fieldset>

    <fieldset class="p-3 mb-3">
        <legend class="w-auto m-0 fs-20">Dados da Empresa</legend>

        <li>Razão social: <span>{{ $entidade->razao_social }}</span></li>
        <li>Nome fantasia: <span>{{ $entidade->nome_fantasia }}</span></li>
        <li>Site: <span>{{ $entidade->site }}</span></li>
        <li>CNPJ: <span>{{ $entidade->cnpj }}</span></li>
        <li>CEP: <span>{{ $entidade->cep }}</span></li>
        <li>Endereço: <span>{{ $entidade->endereco }}, {{ $entidade->numero }} -
                {{ $entidade->complemento }}</span></li>
        <li>Cidade: <span>{{ $entidade->cidade }}</span></li>
        <li>UF: <span>{{ $entidade->uf }}</span></li>
    </fieldset>

    <fieldset class="p-2 mb-2">
        <legend class="w-auto m-0 fs-20">Responsável legal</legend>

        <li>Nome: <span>{{ $entidade->nome }}</span></li>
        <li>Sexo: <span>{{ $entidade->sexo }}</span></li>
        <li>RG: <span>{{ $entidade->rg }}</span></li>
        <li>CPF: <span>{{ $entidade->cpf }}</span></li>
        <li>E-mail: <span> {{ $entidade->email }}</span></li>
        <li>Telefone: <span>{{ $entidade->telefone }} / {{ $entidade->celular }}</span></li>
    </fieldset>
</ul>

{{-- 
<div class="table-responsive">
    {{ $entidade->razao_social }} <br>
    {{ $entidade->nome_fantasia }} <br>
    {{ $entidade->site }} <br>
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
    {{ $entidade->celular }} <br>
    {{ $entidade->nome }} <br>
    {{ $entidade->sexo }} <br>
    {{ $entidade->rg }} <br>
    {{ $entidade->cpf }} <br>
    {{ $entidade->expedido }} <br>
    {{ $entidade->validade }} <br>
@if ($entidade->ativo === '0') <span>Aguardando</span>@elseif($entidade->ativo ===
    '1') <span>Ativo</span> @elseif($entidade->ativo === '2') <span>Bloqueado</span> @endif
    </li>
</div> --}}
