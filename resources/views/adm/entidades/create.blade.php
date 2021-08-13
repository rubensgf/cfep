@extends('layouts.adm')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastro - Entidade</h1>
                </div>

        <form id="formInsc" action="{{ route('adm.entidade.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
            <fieldset class="p-3 mb-3">
                <legend class="w-auto">Dados Pessoais</legend>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Razão     Social</label>
                        <input type="text" class="form-control" id="razao_social" name="razao_social" size="40" maxlength="70"
                            placeholder="" required>
                    </div>

                  <div class="form-group col-md-6">
                        <label>Nome Fantasia</label>
                        <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" size="40" maxlength="70"
                            placeholder="Nome fantasia" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Site</label>
                        <input type="text" class="form-control" id="site" name="site" size="40" maxlength="70"
                            placeholder="" required>
                    </div>

                  <div class="form-group col-md-6">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" size="40" maxlength="70"
                            placeholder="" required>
                    </div>
                </div>
                <div class="form-row">

                <div class="form-group col-md-5">
                    <label>Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" size="40" maxlength="100" placeholder="Av. Paulista" required>
                </div>

                <div class="form-group col-md-1">
                    <label>Número</label>
                    <input id="numero" type="text" class="form-control" name="numero" size="40"  placeholder="1224 - B" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Complemento</label>
                    <input id="complemento" type="text" class="form-control" name=complemento" size="40"  placeholder="1224 - B" required>
                </div>
                </div>
                <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" size="40" maxlength="100" placeholder="São Paulo" required>
                </div>

                <div class="form-group col-md-1">
                    <label>UF</label>
                    <select id="uf" name="uf" class="form-control" >
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

                <div class="form-group col-md-3">
                    <label>CEP</label>
                    <input id="cep" type="text" class="form-control" name="cep" size="40" maxlength="100" placeholder="01290100" required>
                </div>




                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" size="40" maxlength="70"
                            placeholder="Nome completo do pai" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>email</label>
                        <input type="text" class="form-control" id="email" name="email" size="40" maxlength="70"
                            placeholder="Nome completo do pai" required>
                    </div>
</div>
<div class="form-row">
                    <div class="form-group col-md-3">
                        <label>RG</label>
                        <input type="text" class="form-control" id="rg" name="rg" size="40" maxlength="20"
                            placeholder="Digite o número do RG" required>
                    </div>

                    <div class="form-group col-md-3">
                        <label>CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" size="40" maxlength="20"
                            placeholder="Digite o número do CPF" data-mask="cpf" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" size="40" maxlength="70"
                            placeholder="(00) 0000-0000" data-mask="phone" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nomeP">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" size="40" maxlength="70"
                            placeholder="(00) 90000-0000" data-mask="phone_cel" required>
                    </div>
                </div>




                    <div class="form-group col-md-3">
                        <label>Sexo</label>
                        <select name="sexo" class="form-control">
                            <option value="">Selecione...</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                        </select>
                    </div>

                </div>

                <div class="form-row pl-3">
                    <button type="submit" class="btn btn-primary col-md-4 my-5">Continuar</button>
                </div>



        </form>





@endsection
