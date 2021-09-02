@extends('layouts.app')

@section('content')

    <main id="main" class="main-form-parceiro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="form-title flex-column my-3 my-md-5 text-center font-weight-bold">
                    <h2>Seja um parceiro do CFEP</h2>
                    <p class="d-flex align-items-center justify-content-center">
                        <span class="mr-1 pb-1">@include('icons.icon-warning-circle')</span>
                        Preencha todos os campos com atenção
                    </p>
                </div>
            </div>
            <div class="row justify-content-end pr-3">
                <a href="https://www.cfep.org.br/parceiro" target="_blank">
                    Seja também um parceiro do CFEP</a>
            </div>

            <form id="formInsc" action="{{ route('seja-um-parceiro.store') }}" method="POST"
                enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset class="p-3 mb-3">
                    <legend class="w-auto">Dados da Empresa</legend>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="razaoSocial">Razão Social</label>
                            <input type="text" class="form-control" id="razao_social" name="razao_social" size="40"
                                maxlength="100" placeholder="Informe a Razão Social" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nomeFantasia">Nome Fantasia</label>
                            <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" size="40"
                                maxlength="100" placeholder="Informe o Nome Fantasia da empresa" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj" name="cnpj" size="40" maxlength="20"
                                placeholder="Digite o número do CNPJ sem pontos e traços" data-mask="cnpj" required>
                            <span class="font-weight-bold" id="doc-status"></span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="site">Site</label>
                            <input type="text" class="form-control" id="site" name="site" size="40"
                                maxlength="100" placeholder="digite o site da empresa">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="cep"> CEP</label>
                            <input type="text" class="form-control" id="cep" name="cep" size="40" maxlength="12"
                                placeholder="digite o Código Postal" data-mask="cep" required>
                            <span class="font-weight-bold" id="cep-error"></span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="endereco"> Endereço</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" size="40" maxlength="100"
                                placeholder="digite o endereço">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="numero"> Número</label>
                            <input type="text" class="form-control" id="numero" name="numero" size="40" maxlength="15"
                                placeholder="digite o número">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="compl"> Complemento</label>
                            <input type="text" class="form-control" id="complemento" name="complemento" size="40"
                                maxlength="100" placeholder="digite o complemento do endereço">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="bairro"> Bairro</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" size="40" maxlength="100"
                                placeholder="digite o Bairro">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="cidade"> Cidade</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" size="40" maxlength="100"
                                placeholder="digite a Cidade">
                        </div>

                        <div class="form-group col-md-2">
                            <label for="uf">UF</label>
                            <select id="uf" name="uf" class="form-control">
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AM">AM</option>
                                <option value="AP">AP</option>
                                <option value="BA">BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MG">MG</option>
                                <option value="MS">MS</option>
                                <option value="MT">MT</option>
                                <option value="PA">PA</option>
                                <option value="PB">PB</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="PR">PR</option>
                                <option value="RJ">RJ</option>
                                <option value="RN">RN</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="RS">RS</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                </fieldset>


                <fieldset class="p-3 mb-4">
                    <legend class="w-auto">Representante legal</legend>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="representante">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" size="40" maxlength="100"
                                placeholder="Informe o Nome do Representante Legal empresa" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="rg">RG</label>
                            <input type="text" class="form-control" id="rg" name="rg" size="40" maxlength="20"
                                placeholder="Digite o Registro Geral">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" size="40" maxlength="20"
                                placeholder="Digite o número do CPF" data-mask="cpf" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" name="sexo" class="form-control">
                                <option value selected hidden="">Selecione...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" size="40" maxlength="50"
                                placeholder="Digite um e-mail válido">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fone">Telefone</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" data-mask="phone"
                                placeholder="Digite no formato 99 9999-9999">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="fone">Celular</label>
                            <input type="text" class="form-control" id="celular" name="celular" data-mask="phone_cel"
                                placeholder="Digite no formato 99 9999-9999">
                        </div>
                    </div>
                </fieldset>

                <div class="form-group text-center col-md-12">
                    <div class="form-row">
                        <button type="submit" id="submit" class="btn btn-primary col-md-4 mb-5">Enviar
                            Solicitação</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
