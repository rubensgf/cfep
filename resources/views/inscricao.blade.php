@extends('layouts.site')

@section('content')

      <div class="table-responsive">
      <form id="formInsc" onsubmit="return alertar()" action="funcao/subir_arquivos.php" method= "POST" enctype="multipart/form-data">
    <div id="main" class="container">

      <div class="row">
        <br><br>
        <legend style="margin-left: 1rem; text-align: center;" >Formulário de inscrição<i style="font-size: 1.5rem"> <br>
        (Nota: O tamanho máximo dos arquivos são de 1,2MB. Leia os <i class="fas fa-question-circle"></i>)</i>  <br><a style="font-size: 1.3rem" href="https://www.cfep.org.br/indentidade-profissional" target="_blank"><strong>Quem pode se inscrever no conselho?<strong></a></legend>



        <div class="form-group col-md-6">
          <label  >Seu nome: </label><br>
          <input required type="text" class="form-control" id="nome" name="nome" size="40" maxlength="70" placeholder="nome completo">
        </div>

        <div class="form-group col-md-4">
          <label >Seu E-mail: </label><br>
          <input required type="text" class="form-control" id="email" name="email" size="40" maxlength="70" placeholder="usuario@servidor.dominio">
        </div>

        <div class="form-group col-md-2">
          <label >Tipo de inscrição: </label><br>
          <select name="Inscricao" form="formInsc" class="form-control">
            <option value="Pedagogo">Pedagogo</option>
            <option value="Educador">Educador (outras licenciaturas)</option>
          </select>
        </div>

        <div class="form-group col-md-3">
          <label for="nomeP" >Celular: </label><br>
          <input required  type="text" class="form-control" id="celular" name="celular" size="40" maxlength="70" placeholder="(00) 90000-0000">
        </div>

        <div class="form-group col-md-3">
          <label>Telefone:</label>
          <input type="text" class="form-control" id="telefone" name="telefone" size="40" maxlength="70" placeholder="(00) 0000-0000">
        </div>

        <div class="form-group col-md-3">
          <label> RG:  </label> <br>
          <input required type="text" class="form-control" id="rg" name="rg" size="40" maxlength="20" placeholder="Digite o Registro Geral" >
        </div>

        <div class="form-group col-md-3">
          <label> CPF:  </label> <br>
          <input required type="text" class="form-control" id="cpf" name="cpf"  size="40" maxlength="20" placeholder="Digite o n�mero do CPF">
        </div>

        <div class="form-group col-md-4">
          <label>Ficha de inscrição:
            <i id="fichaICO"  data-tippy-arrow="true"  data-tippy='<h5>�� imprescind�vel que esteja preenchido o campo "Doador de �rg�os" e que a assinatura esteja centralizada no campo de assinatura</h5>' class="fas fa-question-circle"></i>
            <a target="_blank" href="imagens/Ficha-de-inscricao.pdf">Obter Ficha</a></label>
          <input required type="file" class="btn btn-default" id="ficha" name="ficha" >
        </div>

        <div class="form-group col-md-4">
          <label>Diploma frente:</label>
          <input required type="file" class="btn btn-default" id="diploma" name="diploma" >
        </div>

        <div class="form-group col-md-4">
          <label >Diploma verso:
           <i id="dipICO" data-tippy-arrow="true" data-tippy='<h5>Voc� pode optar por deixar a frente e o verso em um arquivo e envia-lo no campo do "Diploma Frente", neste caso, mantenha este campo sem arquivos</h5>' class="fas fa-question-circle"></i>
         </label>
         <input type="file" class="btn btn-default" id="diploma verso" name="diploma verso" >
       </div>

       <div class="form-group col-md-4">
        <label required >Foto 3x4:</label>
        <input type="file" class="btn btn-default" id="foto" name="foto" >
      </div>

      <div class="form-group col-md-4">
        <label >Comprovante de residência</label>
        <input required type="file" class="btn btn-default" id="comprovante" name="comprovante" >
      </div>

      <div class="form-group col-md-4">
        <label >RG:
          <i id="rgICO"   data-tippy-arrow="true" data-tippy="<h5>A digitaliza��o deve conter a frente e o verso do RG em uma p�gina s�</h5>" class="fas fa-question-circle"></i>
        </label>
        <input required type="file" class="btn btn-default" id="rg" name="rg" >
      </div>
      <div class="form-group col-md-2"></div>
      <div class="form-group col-md-4">
        <label >CPF:
          <i id="cpfICO"   data-tippy-arrow="true" data-tippy="<h5>Se o seu RG possui seu nº de CPF mantenha este campo sem arquivos</h5>" class="fas fa-question-circle"></i>
       </label>
       <input type="file" class="btn btn-default" id="CPF" name="CPF" >
     </div>

     <div class="form-group col-md-6">
      <label >Tíitulo de eleitor:
       <i id="titICO"   data-tippy-arrow="true" data-tippy="<h5>Somente a frente é necessária</h5>" class="fas fa-question-circle"></i></label>
      <input required type="file" class="btn btn-default" id="titulo" name="titulo" >
    </div>

    <p style="text-align: center; color: red;"> <i class="glyphicon glyphicon-alert"></i> <strong>Obs.: Os arquivos precisam estar digitalizados (escaneados). Caso contr�rio, n�o ser�o aceitos.</strong></p>

    <div class="form-group text-center col-md-12">
      <input type="submit" id="submit" value="Enviar" class="btn btn-lg btn-primary ">
    </div>
  </form>
      </div>
    </main>
  </div>
</div>

@endsection
