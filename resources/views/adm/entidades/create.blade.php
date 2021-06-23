@extends('layouts.adm')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Cadastro - Entidade</h1>

                </div>

                {{ $entidade->razaoSocial }} <br>
                    {{ $entidade->nomeFantasma }} <br>
                    {{ $entidade->webSite }} <br>
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
                    {{ $entidade->situacaoCadastro }} <br>
                    {{ $entidade->nomeCompleto }} <br>
                    {{ $entidade->sexo }} <br>
                    {{ $entidade->rg }} <br>
                    {{ $entidade->cpf }} <br>
                    {{ $entidade->expedido }} <br>
                    {{ $entidade->validade }} <br>
                    {{ $entidade->status }}
 <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
            </main>





@endsection
