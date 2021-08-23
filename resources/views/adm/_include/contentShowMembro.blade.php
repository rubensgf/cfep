<div class="col-md-3">
    @if ($membro->foto)
        <img class="foto-img img-fluid border mb-4"
            src="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $membro->foto }}">
    @else
        <div class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
            <small>Sem Foto</small>
        </div>
    @endif
</div>

<ul class="col-md-9 p-0">
    <li class="mb-3"><span class="font-weight-bold fs-22">{{ $membro->nome }}</span></li>

    {{-- <li>token transacao : <span>{{ env('LINK_REDIRECT')}}/{{ $pedido->token }}</span></li> --}}

    <fieldset class="p-3 mb-3">
        <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

        <li>ref. pedido : <span>{{ $pedido->referencia }}</span></li>
        <li>token transacao : <span>{{ $pedido->token }}</span></li>

        <li>N° inscrição: <span>{{ $membro->ncarteirinha }}</span></li>
        <li>Expedido: <span>{!! date('d/m/yy', strtotime($membro->expedido)) !!}</span></li>
        <li>Validade: <span>{!! date('d/m/yy', strtotime($membro->vigencia)) !!}</span></li>
        <li>Auditado: <span>{{ $membro->auditado ? 'Sim' : 'Não' }}</span></li>
        <li>Status:
            @if ($user->ativo === '1') <span>Ativo</span>
            @elseif($user->ativo === '2') <span>Bloqueado</span>
            @elseif($user->ativo === '3') <span>Cancelado</span>
            @endif
        </li>
        <li>Via da carteirinha: <span>2ª</span></li>
    </fieldset>

    <fieldset class="p-3 mb-3">
        <legend class="w-auto m-0 fs-20">Dados pessoais</legend>

        <li>Nome: <span>{{ $membro->nome }}</span></li>
        <li>Mãe: <span>{{ $membro->nome_mae }}</span></li>
        <li>Pai: <span>{{ $membro->nome_pai }}</span></li>
        <li>Nascimento: <span>{{ $membro->data_nascimento }}</span></li>
        <li>Sexo: <span>{{ $membro->sexo }}</span></li>
        <li>RG: <span>{{ $membro->rg }}</span></li>
        <li>CPF: <span>{{ $membro->cpf }}</span></li>
        <li>Doador de órgãos e tecidos: <span>{{ $membro->doador ? 'Sim' : 'Não' }}</span></li>
        <li>CEP: <span>{{ $membro->cep }}</span></li>
        <li>Endereço: <span>{{ $membro->endereco }}, {{ $membro->numero }}</span></li>
        <li>Cidade: <span>{{ $membro->cidade }}</span></li>
        <li>UF: <span>{{ $membro->uf }}</span></li>

        <li>E-mail: <span> {{ $user->email }}</span></li>
        <li>Telefone: <span>{{ $membro->telefone }} / {{ $membro->celular }}</span></li>
    </fieldset>
    {{-- <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Graduação</legend>

                <li>Graduação: <span>{{ $membro->graduacao }}</span></li>
                <li>Universidade: <span>{{ $membro->universidade }}</span></li>
                <li>Data Formação: <span>{{ $membro->dataFormacao }}</span></li>

            </fieldset> --}}
    <fieldset class="p-3 mb-3">
        <legend class="w-auto m-0 fs-20">Documentação</legend>
        <li>
            <span>Ficha </span>
            <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->ficha }}">Baixar</a>
        </li>
        <li>
            <span>Diploma </span>
            <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->diploma }}">Baixar</a>
        </li>
        <li>
            <span>Diploma verso </span>
            <a
                href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->diploma_verso }}">Baixar</a>
        </li>
        <li>
            <span>RG </span>
            <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->rg }}">Baixar</a>
        </li>
        <li>
            <span>CPF </span>
            <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->cpf }}">Baixar</a>
        </li>
        <li>
            <span>Título </span>
            <a href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->titulo }}">Baixar</a>
        </li>
        <li>
            <span>Comprovante </span>
            <a
                href="{{ url('/storage/files/') }}/{{ $membro->ncarteirinha }}/{{ $arquivos->comprovante }}">Baixar</a>
        </li>
    </fieldset>
</ul>
