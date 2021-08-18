<div class="col-md-3">
            @if ($membro->foto)
                <img class="foto-img img-fluid border mb-4" src="/images/fotos-membros/{{ $membro->foto }}">
            @else
                <div class="foto-img img-thumbnail img-fluid border mb-4 d-flex justify-content-center align-items-center">
                    <small>Sem Foto</small>
                </div>
            @endif
        </div>

        <ul class="col-md-9 p-0">
            <li class="mb-3"><span class="font-weight-bold">{{ $membro->nome }}</span></li>

            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Inscrição CFEP</legend>

                <li>N° inscrição: <span>{{ $membro->id }}</span></li>
                <li>Expedido: <span>{{ $membro->expedido }}</span></li>
                <li>Validade: <span>{{ $membro->vigencia }}</span></li>
                <li>Situação: <span>{{ $membro->situacao }}</span></li>
            </fieldset>
            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Dados pessoais</legend>

                <li>Nome: <span>{{ $membro->nome }}</span></li>
                <li>Mãe: <span>{{ $membro->nome_mae }}</span></li>
                <li>Pai: <span>{{ $membro->nome_pai }}</span></li>
                <li>Nascimento: <span>{{ $membro->data_nascimento }}</span></li>
                <li>Sexo: <span>{{ $membro->sexo }}</span></li>
                <li>RG: <span>{{ $membro->rg }}</span></li>
                <li>CPF: <span>{{ $membro->cpf }}</span></li>
                <li>CEP: <span>{{ $membro->cep }}</span></li>
                <li>Endereço: <span>{{ $membro->endereco }}</span></li>
                <li>Cidade: <span>{{ $membro->cidade }}</span></li>
                <li>UF: <span>{{ $membro->uf }}</span></li>

                <li>E-mail: <span>{{ $membro->email }}</span></li>
                <li>Telefone: <span>{{ $membro->telefone }} / {{ $membro->celular }}</span></li>
            </fieldset>
            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Graduação</legend>

                <li>Graduação: <span>{{ $membro->graduacao }}</span></li>
                <li>Universidade: <span>{{ $membro->universidade }}</span></li>
                <li>Data Formação: <span>{{ $membro->dataFormacao }}</span></li>

            </fieldset>
            <fieldset class="p-2 mb-2">
                <legend class="w-auto m-0 fs-20">Documentação</legend>

                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
                <li><span>PDF </span><a href="#">Baixar</a></li>
            </fieldset>
        </ul>
    </div>