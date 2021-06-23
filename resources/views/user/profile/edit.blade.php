@extends('layouts.adm')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="pull-left">
                <h3>Alterar - Nome do colégios</h3>
            </div>
            <div class="pull-right">
              <a href="javascript:history.back()" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Voltar </a>
            </div>
        </div>
    </div>

    



   
<div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                

                <div class="panel-body">
                  <!---->
                  {!! Form::open(['route'=>['colegios.update',$colegio->id ],'method'=>'put', 'class'=>'form-bordered']) !!}
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Colégio:</strong>
                            {!! Form::text('dsColegio', $colegio->dsColegio, array('class' => 'form-control')) !!}
                        </div>
                     <div>
                  </div>       
                  <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Max. Vagas:</strong>
                                {!! Form::text('dsMaxVagas', $colegio->dsMaxVagas, array('class' => 'form-control')) !!}
                            </div>
                         <div>
                  </div>       
                  <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Endereço:</strong>
                                {!! Form::text('dsEndereco', $colegio->dsEndereco, array('class' => 'form-control')) !!}
                            </div>
                         <div> 
                </div>
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bairro:</strong>
                                {!! Form::text('dsBairro', $colegio->dsBairro, array('class' => 'form-control')) !!}
                            </div>
                        <div>
                </div>
                <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Cidade:</strong>
                                {!! Form::text('dsCidade', $colegio->dsCidade, array('class' => 'form-control')) !!}
                            </div>
                        <div>
                </div>
                <div class="row">            
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Estado:Ex:.(SP)</strong>
                                {!! Form::text('dsEstado', $colegio->dsEstado, array('class' => 'form-control')) !!}
                            </div>
                        <div>
                </div>  
                <div class="row">            
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Senha de acesso (Teste Vocacional)</strong>
                            {!! Form::text('dsAcesso', $colegio->dsAcesso, array('class' => 'form-control')) !!}
                        </div>
                    <div>
                 </div>  
                 <div class="row">            
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link pesquisa</strong>
                                {!! Form::text('dsLink', $colegio->dsLink, array('class' => 'form-control')) !!}
                            </div>
                        <div>
                </div>                
                <div class="row">  

                  {!! Form::submit('>> Alterar', array('class' => 'btn btn-danger pull-right m-t-n-xs')) !!}
                  {!! Form::close() !!}
                               
                   
                  <!---->
                </div>
            </div>
        </div>
    </div>

</div>




@endsection
