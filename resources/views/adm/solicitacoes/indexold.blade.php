@extends('layouts.adm')

@section('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('dist/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')


<div class="modal inmodal fade" id="modalNovocol" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title">Cadastro - Novo Tema</h4>
              
          </div>
          <div class="modal-body">
              {!! Form::open(['route'=>['colegios.store'],'method'=>'post']) !!}



               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Colégio:</strong>
                            {!! Form::text('dsColegio', null, array('placeholder' => '','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Max. Vagas:</strong>
                          {!! Form::text('dsMaxVagas', null, array('placeholder' => '','class' => 'form-control')) !!}
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Endereço:</strong>
                        {!! Form::text('dsEndereco', null, array('placeholder' => '','class' => 'form-control')) !!}
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Bairro:</strong>
                      {!! Form::text('dsBairro', null, array('placeholder' => '','class' => 'form-control')) !!}
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Cidade:</strong>
                      {!! Form::text('dsCidade', null, array('placeholder' => '','class' => 'form-control')) !!}
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:Ex:.(SP)</strong>
                    {!! Form::text('dsEstado', null, array('placeholder' => '','class' => 'form-control')) !!}
                </div>
            </div>
        </div>

      
                <input type="hidden" value="S" name="dsAtivo" id="dsAtivo">
                    
          </div>
          <div class="modal-footer">
              {!! Form::submit('>> Cadastrar', array('class' => 'btn btn-primary')) !!}
              {!! Form::close() !!}
          </div>
      </div>
  </div>
</div>      


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Lista de Colégios</h3>
            </div>
            <div class="pull-right"> 
              <a data-toggle="modal" class="btn btn-primary" href="#modalNovocol"><i class="fa fa-plus"></i> Novo Colégio</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="box">
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
        <thead>
        
            <th>Colégios</th>
            <th>Max. Vagas</th>
            <th>Endereço</th>
            <th>Senha<br> teste Voc.</th>
            <th>Alterar</th>
            <th>Excluir</th>
            <th>Salas</th>
            <th>Série/Turma</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($colegios as $i)
          <tr>
         
              <td>{{ $i->dsColegio}}</td>
              <td>{{$i->dsMaxVagas}}</td>
              <td>{{$i->dsEndereco}} - {{$i->dsBairro}}<br>{{$i->dsCidade}} - {{$i->dsEstado}}</td>
              <td>{{$i->dsAcesso}}</td>
              <td>
                <a class="btn btn-warning" href="{{ route('colegios.edit',$i->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>
              <td>

                <form id="remove" action="{{ route('colegios.remove')}}" method="post" onsubmit="return confirmRemove('Tem certeza que deseja excluir?')">
                    <input type="hidden" name="colegios_id" value="{{$i->id}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash"></span>
                      </button>
                </form>

              </td>
              <td>
                <a class="btn btn-warning" href="{{ route('colegios.salas',$i->id) }}" alt="salas"><i class="fa fa-plus" aria-hidden="true"></i>
</a>
              </td>
               <td>
                <a class="btn btn-warning" href="{{ route('colegios.turmas',$i->id) }}" alt="salas"><i class="fa fa-plus" aria-hidden="true"></i>
</a>
              </td>
          </tr>
          @endforeach
          </tbody>
              </table>
            </div>
          </div>




@endsection

@section('scripts')
	
<script type="text/javascript" src="{{ asset('dist/js/jquery-te-1.4.0.min.js') }}" charset="utf-8"></script>

<!-- DataTables -->
<script src="{{ asset('dist/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('dist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('dist/bower_components/fastclick/lib/fastclick.js') }}"></script>

<script>
    function confirmRemove(question){
    if(confirm(question)){
        return true;
    }
     else {
             return false;
     }
}
</script>

<script>
  $(function () {
    
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : false,
      'autoWidth'   : true ,
      //"pagingType"  : "full_numbers",
      
   
      "language": {
            "lengthMenu": "Mostrar _MENU_",
            "zeroRecords": "Nenhum registro encontrado",
            "info": "Total (_PAGE_/_PAGES_)",
            "infoEmpty": "Nenhum registro encontrado",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Pesquisar",
            "paginate": {
              
              "next": "Próximo",
              "previous": "Anterior",
              "first": "Primeiro",
              "last": "Último"
            },
        }
    })
  })
</script>


@endsection
