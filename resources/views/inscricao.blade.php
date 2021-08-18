@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="form-title flex-column my-5 text-center font-weight-bold">
            <h2>Formulário de inscrição</h2>
            <p class="d-flex align-items-center justify-content-center">
                <span class="mr-1 pb-1">
                    @include('icons.icon-warning-circle')
                </span>
                    Preencha todos os campos com atenção
            </p>
        </div>
    </div>
    <div class="row justify-content-end pr-3">
        <a href="https://www.cfep.org.br/indentidade-profissional" target="_blank">
            Quem pode se inscrever no conselho?</a>
    </div>

    <form id="formInsc" action="{{ route('inscricao.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <fieldset class="p-3 mb-3">
            <legend class="w-auto">Dados Pessoais</legend>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nome completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" size="40" maxlength="70"
                        placeholder="Nome completo" required>
                </div>

                <div class="form-group col-md-4">
                    <label>Nome da Mãe</label>
                    <input type="text" class="form-control" id="nome_mae" name="nome_mae" size="40" maxlength="70"
                        placeholder="Nome completo da mãe" required>
                </div>

                <div class="form-group col-md-4">
                    <label>Nome do Pai</label>
                    <input type="text" class="form-control" id="nome_pai" name="nome_pai" size="40" maxlength="70"
                        placeholder="Nome completo do pai" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Data nascimento</label>
                    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento"
                        placeholder="dd/mm/aaaa" data-mask="date" required>
                </div>

                <div class="form-group col-md-4">
                    <label>Naturalidade</label>
                    <input type="text" class="form-control" id="naturalidade_cidade" name="naturalidade_cidade" size="40"
                        maxlength="70" placeholder="Nome da Cidade" required>
                </div>

                <div class="form-group col-md-2">
                    <label>UF</label>
                    <select id="naturalidade_uf" name="naturalidade_uf" class="form-control">
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
                    <label>Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value="">Selecione...</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
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
                    <label>Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" size="40" maxlength="70"
                        placeholder="(00) 90000-0000" data-mask="phone_cel" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label>CEP</label>
                    <input id="cep" type="text" class="form-control" name="cep" data-mask="cep" size="40" maxlength="100"
                        placeholder="01290100" required>
                    <span class="font-weight-bold" id="cep-error"></span>
                </div>

                <div class="form-group col-md-4">
                    <label>Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" size="40" maxlength="100"
                        placeholder="Av. Paulista" required>
                </div>
                <div class="form-group col-md-1">
                    <label>Número</label>
                    <input id="numero" type="text" class="form-control" name="numero" size="40" placeholder="1224 - B"
                        required>
                </div>

                <div class="form-group col-md-2">
                    <label>Complemento</label>
                    <input id="complemento" type="text" class="form-control" name="complemento" size="40"
                        placeholder="apto 45">
                </div>

                <div class="form-group col-md-3">
                    <label>Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" size="40" maxlength="100"
                        placeholder="São Paulo" required>
                </div>

                <div class="form-group col-md-2">
                    <label>UF</label>
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

                <div class="form-group col-md-5">
                    <label>Doador de orgãos ou tecidos?</label>
                    <select name="doador" class="form-control">
                        <option value="">Selecione...</option>
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>Assinatura</label>
                    <input type="text" class="form-control" id="assinatura" name="assinatura" size="40" maxlength="100">
                </div>
            </div>
        </fieldset>

        <fieldset class="p-3 mb-4">
            <legend class="w-auto">Acesso Meu CFEP</legend>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" size="40" maxlength="70"
                        placeholder="usuario@cfep.com.br" data-mask="email" required>
                </div>
                <div class="form-group col-md-3">
                    <label>Senha</label>
                    <input type="password" class="form-control" id="password" name="password" minlength="8" maxlength="12"
                        placeholder="No mínimo 8 caracteres" required>
                    <span class="font-weight-bold" id="password-status"></span>
                </div>
                <div class="form-group col-md-3">
                    <label>Confirme a senha</label>
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" minlength="8"
                        maxlength="12" placeholder="Confirme a senha digitada" required>
                    <span class="font-weight-bold" id="password-error"></span>
                </div>
                <div class="form-group col-md-6">
                    <label>Tipo de inscrição </label>
                    <select name="inscricao" form="formInsc" class="form-control col-md-10">
                        <option value="">Selecione...</option>
                        <option value="pedagogo">Pedagogo</option>
                        <option value="educador">Educador (outras licenciaturas)</option>
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset class="p-3 mb-4">
            <legend class="w-auto">Uploads</legend>

            <div class="box-aviso row w-auto mb-4 px-3">
                <div class="col-md-9 py-2">
                    <p class="font-weight-bold mb-1">ATENÇÃO:</p>
                    <p class="mb-0">*O tamanho máximo dos arquivos são de 1,2MB.<br>
                        **Os arquivos precisam estar digitalizados (escaneados). Caso contrário, não
                        serão aceitos.</p>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Ficha de inscrição
                        {{-- <i id="fichaICO" data-tippy-arrow="true"
                            data-tippy='<h5>�� imprescind�vel que esteja preenchido o campo "Doador de �rg�os" e que a assinatura esteja centralizada no campo de assinatura</h5>'
                            class="fas fa-question-circle"></i> --}}
                        (<a class="font-weight-bold" target="_blank" href="../images/pdf/ficha-de-inscricao.pdf">Obter
                            Ficha</a>)
                    </label>
                    <input type="file" class="btn btn-default border" id="arq_ficha" name="arq_ficha" required>
                    <p>*Essa ficha deve ser preenchida e assinada pelo titular</p>
                </div>

                <div class="form-group col-md-6">
                    <label>Foto 3x4</label>
                    <input type="file" class="btn btn-default border" id="foto" name="foto" accept="image/jpeg, image/png"
                        required>
                    <p>*A foto deve ter o formato 3x4 (Igual ao RG) e ter fundo branco para ser aceita</p>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Diploma frente</label>
                    <input type="file" class="btn btn-default border" id="arq_diploma" name="arq_diploma" required>
                </div>

                <div class="form-group col-md-5">
                    <label>Diploma verso
                        {{-- <i id="dipICO" data-tippy-arrow="true"
                            data-tippy='<h5>Voc� pode optar por deixar a frente e o verso em um arquivo e envia-lo no campo do "Diploma Frente", neste caso, mantenha este campo sem arquivos</h5>'
                            class="fas fa-question-circle"></i> --}}
                    </label>
                    <input type="file" class="btn btn-default border" id="arq_diploma_verso" name="arq_diploma_verso"
                        required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>RG
                        {{-- <i id="rgICO" data-tippy-arrow="true"
                                data-tippy="<h5>A digitaliza��o deve conter a frente e o verso do RG em uma p�gina s�</h5>"
                                class="fas fa-question-circle"></i> --}}
                    </label>
                    <input type="file" class="btn btn-default border" id="arq_rg" name="arq_rg" required>
                </div>
                <div class="form-group col-md-5">
                    <label>CPF
                        {{-- <i id="cpfICO" data-tippy-arrow="true"
                                data-tippy="<h5>Se o seu RG possui seu nº de CPF mantenha este campo sem arquivos</h5>"
                                class="fas fa-question-circle"></i> --}}
                    </label>
                    <input type="file" class="btn btn-default border" id="arq_cpf" name="arq_cpf">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Título de eleitor
                        {{-- <i id="titICO" data-tippy-arrow="true" data-tippy="<h5>Somente a frente é necessária</h5>"
                            class="fas fa-question-circle"></i> --}}
                    </label>
                    <input type="file" class="btn btn-default border" id="arq_titulo" name="arq_titulo" required />
                </div>

                <div class="form-group col-md-5">
                    <label>Comprovante de residência</label>
                    <input type="file" class="btn btn-default border" id="arq_comprovante" name="arq_comprovante" required>
                </div>
            </div>
        </fieldset>

        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" id="aceite-dados" aria-label="Declaro que esses dados são verdadeiros" required>
                <label class="mb-0 ml-1" for="aceite-dados">Declaro que todos os dados/arquivos aqui enviados, são
                    verdadeiros.</label>
            </div>
            <div class="form-check">
                <input type="checkbox" id="aceite-termos"
                    aria-label="Declaro que, aceito os termos de uso e Politicas de privacidade" required>
                <label class="mb-0 ml-1" for="aceite-termos">Declaro que, aceito os <a href="http://" target="_blank"
                        rel="noopener noreferrer">Termos de uso</a> e <a href="http://" target="_blank"
                        rel="noopener noreferrer">Politicas de privacidade</a>.</label>
            </div>

            <div class="form-row pl-3">
                <button type="submit" class="btn btn-primary col-md-4 my-5">Continuar</button>
            </div>
        </div>
    </form>

@section('footer')
    @include('partials.footer')
@show
@endsection
